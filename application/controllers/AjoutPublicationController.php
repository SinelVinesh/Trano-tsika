<?php
    class AjoutPublicationController extends MY_Controller{

        public function uploadImage($dossier,$noms){
            $count=count($noms);
            for($i=0;$i<$count;$i++){
                $_FILES['image']['name'] = $noms[$i];
                $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                $config['upload_path'] = $dossier; 
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '5000';
                $config['file_name'] = $_FILES['images']['name'][$i];
                $this->load->library('upload',$config);      
                if($this->upload->do_upload('image')){
                }
            }
        }

        public function ajout_publication(){

            $this->load->model('Publication');
            $this->load->model('Photo');
            $this->load->model('DetailUtilite');
            $this->load->model('DetailTag');

            $inputs = ["titre","location","rooms","description","tags[]","images","position_lat","position_lng","tagsUtil[],prix,surface,lieu"];
            //autoload session + form_validation
            $datas = $this->get_datas($inputs,"post");
            
            $this->form_validation->set_rules('titre','Titre','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('rooms','Rooms','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('tags[]','Tags','required');
            $this->form_validation->set_rules('position_lat','Position_lat','required');
            $this->form_validation->set_rules('position_lng','Position_lng','required');
            $this->form_validation->set_rules('tagsUtil[]','Tags_Util','required');
            $this->form_validation->set_rules('prix','Prix','required');
            $this->form_validation->set_rules('surface','Surface','required');
            $this->form_validation->set_rules('lieu','Lieu','required');
            
            $count = count($_FILES['images']['name']);
            
            if ($this->form_validation->run()){
                $this->db->trans_start();
                $noms=array();
                $id_pub=$this->Publication->get_next_val_serial("Publication","id_publication");
                $dossier="assets/Images/".$id_pub."/";
                $this->Publication->insert($id_pub,$_SESSION["id_client"],$datas["location"],$datas["titre"],$datas["description"],$datas["prix"],$datas["lieu"],$datas["position_lat"],$datas["position_lng"],$datas["rooms"],$datas["surface"]);
                
                for($i=0;$i<$count;$i++){
                    $id_img=$this->Photo->get_next_val_serial("Photo","id_photo");
                    $lien=base_url($dossier.$id_img.$_FILES['images']['type'][$i]);
                    $this->Photo->insert($id_img,$lien,$id_pub);
                    $noms[]=$id_img.$_FILES['images']['type'][$i];
                }

                foreach ($datas["tags"] as $tag) {
                    $this->DetailTag->insert($tag,$id_pub);
                }

                foreach ($datas["tagsUtil"] as $util) {
                    $this->DetailUtilite->insert($util,$id_pub);
                }

                $this->DetailUtilite->insert($id_pub,$datas["utilite"]);
                $this->db->trans_complete();
                #mkdir(base_url($dossier.$id_pub));
                $this->uploadImage($dossier,$noms);
            }
            $this->load_view('.');    
        } 
    }
?>