<?php
    class SelectionJournalController extends CI_Controller{

        public function  __construct(){
            parent::__construct();
            $this->load->model("Ecriture");
            $this->load->model("Tiers");
            $this->load->model("Exercice");
            $this->load->model("Journal");
            $this->load->model("ExerciceCourant");
            $this->load->model("JournalCloture");
            $this->load->model("Mvt");
            $this->load->model("Plans");
        }

        public function load_view($error="",$success=""){
            $data = array();
            $data["error"] = $error;
            $data["dates"] = $this->Exercice->get_all_dates($this->ExerciceCourant->get_ex_courant());
            $data["journals"] = $this->Journal->get_all();
            $data["success"] = $success;
            $this->load->view("templates/header");
            $this->load->view("pages/selectionJournal",$data);
            $this->load->view("templates/footer");
        }

        public function load_ajoutEcriture(){
            $this->form_validation->set_rules('mois','Mois','required');
            $this->form_validation->set_rules('journal','Journal','required');

            if($this->form_validation->run()){
                // "/" means that it is avalaible anywhere
                $id = $this->ExerciceCourant->get_ex_courant();
                if($this->Exercice->is_cloture($id)){
                    $this->load_view("Exercice deja cloture");
                }else if ($this->JournalCloture->is_cloture($this->input->post("journal"), $id, $this->input->post("mois"))){
                    $this->load_view("Journal deja cloture");
                }
                else{
                    setcookie("journal", $this->input->post("journal"), time() + (86400 * 30), "/");
                    setcookie("mois", $this->input->post("mois"), time() + (86400 * 30), "/");
                    redirect("/AjoutEcritureController/load_view");
                }
            }else{
                $this->load_view();
            }
        }

        public function upload_csv_file($filename){
            
            if(!file_exists("files/".$filename)){
                move_uploaded_file($_FILES["fichier"]["tmp_name"],"files/".$filename);
            }
        }

        public function get_csv($filename){
            $fp = fopen("files/".$filename,"r");
            $content = array();
            $read = array();

            while(($read = fgetcsv($fp,10000,$this->input->post("separateur")))){
                $content[] = $read; 
            }

            fclose($fp);
            return $content;
        }

        private function create_ecriture($journal,$reference,$libelle,$dateEcriture){
            
            $idEcriture = $this->Ecriture->get_next_val_seq();
            $this->Ecriture->new_ecriture(
                $idEcriture,
                $this->ExerciceCourant->get_ex_courant(),
                $journal,
                $reference,
                $libelle,
                $dateEcriture,1
            );
            return $idEcriture;
        }

        private function prepare_number($number){
            $tmp =  str_replace(",",".",str_replace(" ", "",$number));
            $tmp = preg_replace("/\s/", "", $tmp);
            // echo $tmp;
            return $tmp;
        }

        public function insert_base(){
            $filename = $_FILES["fichier"]["name"];
            $_POST["type"] = $filename;
            $this->form_validation->set_rules('type','Type','required|regex_match[/^.*\.csv$/]');
            $this->form_validation->set_rules('separateur','Separateur','required');
            $this->form_validation->set_rules('journal','Journal','required');

            if($this->form_validation->run()){
            
                $this->upload_csv_file($filename);
                $content = $this->get_csv($filename);
                // print_r($content);
                $idEcriture = $this->create_ecriture($this->input->post("journal"),$content[1][1],$content[1][5],$content[1][0]);

                for($i = 1; $i<count($content); $i++){
                    $debit = ($content[$i][6]==null || $content[$i][6]=="") ? 0 :  $this->prepare_number($content[$i][6]) ;
                    $credit = ($content[$i][7]==null || $content[$i][7]=="") ? 0 : $this->prepare_number($content[$i][7]);
                    $this->Mvt->new_mvt(
                        $idEcriture,
                        1, 
                        $this->Plans->create_plans($content[$i][2],$content[$i][4]), 
                        $this->Tiers->create_tiers($content[$i][3]),  
                        $content[$i][5], 
                        $content[$i][0], 
                        0, 
                        0, 
                        $debit, 
                        $credit
                    );
                }
                $this->load_view("","Insere avec success");
            }else{
                $this->load_view();
            }
        }


    }

?>