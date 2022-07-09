<?php
    class AjoutPublicationController extends MY_Controller{

        public function uploadImage($dossier,$noms){
            $count=count($noms);
            for($i=0;$i<$count;$i++){
                $_FILES['image']['name'] = $noms[$i];
                echo $_FILES['image']['name'] ;
                // $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                $config['upload_path'] = $dossier; 
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '5000';
                $this->load->library('upload',$config);      
                $this->upload->do_upload('image');

                // move_uploaded_file($_FILES["image"]["tmp_name"],"files/imgs/".$_FILES['image']['name']);
            }
        }

        public function set_rules(){
            $this->form_validation->set_rules('titre','Titre','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('room','Rooms','required');
            $this->form_validation->set_rules('description','Description','required');
            $this->form_validation->set_rules('price','price','required');
            $this->form_validation->set_rules('surface','Surface','required');
        }

        public function ajout_publication(){

            $this->load->model('Publication');
            $this->load->model('Photo');
            $this->load->model('DetailUtilite');
            $this->load->model('DetailTag');
            $this->load->model('Boost');

            $inputs = ["titre","location","room","description","images","lat","lng","price","surface","duration","account"];
            //autoload session + form_validation
            $datas = $this->get_datas($inputs,"post");
            $tagsUtil=$this->input->post('tagsUtil[]');
            $tags=$this->input->post('tags[]');

            $this->set_rules();
            $count = count($_FILES['images']['name']);
            print_r($_FILES['images']['name']);
            
            if ($this->form_validation->run()){
                $this->db->trans_start();
                $noms=array();
                $id_pub=$this->Publication->get_next_val_serial("Publication","id_publication");
                $lat = ($this->input->post("lat")=="") ? "NULL" : $this->input->post("lat");
                $lng = ($this->input->post("lng")=="") ? "NULL" : $this->input->post("lng");

                // $this->Publication->insert($id_pub,1,$datas["location"],$datas["titre"],$datas["description"],$datas["price"],$datas["lat"],$datas["lng"],$datas["room"],/*$datas["surface"]*/0);
                $this->Publication->insert($id_pub,$_SESSION["id_client"],$datas["location"],$datas["titre"],$datas["description"],$datas["price"],$lat,$lng,$datas["room"],$datas["surface"]);
                
                $dossier="files/imgs/";
                //insertion des photos dans la bdd
                for($i=0;$i<$count;$i++){
                    $id_img=$this->Photo->get_next_val_serial("Photo","id_photo");
                    $type = explode('.', $_FILES['images']['name'][$i]);
                    $extension=end($type);
                    $lien=$id_img.".".$extension;
                    $this->Photo->insert($id_img,$lien,$id_pub);
                    $noms[]=$lien;
                }

                //insertion detail tag
                foreach ($tags as $tag) {
                    $this->DetailTag->insert($tag,$id_pub);
                }

                //insertion detail util
                foreach ($tagsUtil as $util) {
                    $this->DetailUtilite->insert($util,$id_pub);
                }

                if($datas["duration"]!=""){
                    $date_debut=date('Y-m-d h:i:sa');
                    $d=strtotime("+".$datas["duration"]." weeks");
                    $date_fin=date('Y-m-d',$d);
                    $this->Boost->insert($id_pub,$date_debut,$date_fin);
                }

                $this->db->trans_complete();
                $this->uploadImage($dossier,$noms);
            }
            redirect("AcceuilController");
        } 
    }
?>