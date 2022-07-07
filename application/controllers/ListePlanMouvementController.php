<?php 
    class ListePlanMouvementController extends CI_Controller {

        public function  __construct(){
            parent::__construct();
            $this->load->model("Plans");
            $this->load->model("ExerciceCourant");
            $this->load->model("CompteReporte");
            $this->load->model("Mvt");
        }

        public function load_view($idPlan){
            $id = $this->ExerciceCourant->get_ex_courant();
            $data['solde'] = $this->CompteReporte->type_solde($id,$idPlan);
            $data['mouvements'] = $this->Plans->list_mvt_exo($idPlan,$id);
            $data['DC'] = $this->Mvt->get_DC($data["mouvements"]);
            $this->load->view("templates/header");
            $this->load->view("pages/listePlanMouvement",$data);
            $this->load->view("templates/footer");
        }

        public function lister($idPlan){
            $this->load_view($idPlan);
        }
    } 
?>