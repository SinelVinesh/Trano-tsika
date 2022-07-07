<?php
    
    class ContinuerEcritureController extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model("Plans");
            $this->load->model("Ecriture");
            $this->load->model("Mvt");
            $this->load->model("Devise");
            $this->load->model("Tiers");
            $this->load->model("ExerciceCourant");
        }

        private function set_coockie($idEcriture){
            $ec = $this->Ecriture->get_by_id($idEcriture);
            setcookie("journal", $ec["idjournal"], time() + (86400 * 30), "/");
            setcookie("mois", $ec["dateecriture"], time() + (86400 * 30), "/");
        }

        public function load_view( $idEcriture){
            $this->set_coockie($idEcriture);
            redirect("/AjoutEcritureController/load_view");
        }
    }
?>