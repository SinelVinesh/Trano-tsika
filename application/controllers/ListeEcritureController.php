<?php 
    class ListeEcritureController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Ecriture");
            $this->load->model("Exercice");
            $this->load->model("Journal");
            $this->load->model("ExerciceCourant");
        }


        public function load_view($listes=NULL,$etat=0){
            $idExercice = $this->ExerciceCourant->get_ex_courant();
            $data["ecritures"] = ($etat==0) ? $this->Ecriture->get_ecriture_valide($idExercice) : $listes;
            $data["dates"] = $this->Exercice->get_all_dates($idExercice);
            $data["journals"] = $this->Journal->get_all();


            $this->load->view("templates/header");
            $this->load->view("pages/listeEcriture",$data);
            $this->load->view("templates/footer");
        }

        private function get_search_data(){
            $datas = array();
            $datas["idecriture"]=$this->input->get("idEcriture");
            $datas["mindate"]=$this->input->get("minDate");
            $datas["maxdate"]=$this->input->get("maxDate");
            $datas["date"]=$this->input->get("date");
            $datas["ref"]=$this->input->get("ref");
            $datas["lib"]=$this->input->get("lib");
            $datas["journal"]=$this->input->get("journal");
            $datas["minsomme"]=$this->input->get("minSomme");
            $datas["maxsomme"]=$this->input->get("maxSomme");
            $datas["excourant"]=$this->ExerciceCourant->get_ex_courant();
            return $datas;
        }

        public function search(){
            $this->load_view($this->Ecriture->search($this->get_search_data()),1);
        }
    }


?>