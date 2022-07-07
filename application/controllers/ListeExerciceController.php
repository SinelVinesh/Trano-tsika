<?php 
    class ListeExerciceController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Plans");
            $this->load->model("Exercice");
            $this->load->model("ExerciceCourant");
            $this->load->model("ExerciceCloture");
            $this->load->model("CompteReporte");
        }

        public function load_view($error=""){
            $data["exercices"] = $this->Exercice->get_all();
            $data["exCourant"] = $this->Exercice->get_ex_courant();
            $data["error"] = $error;

            $this->load->view("templates/header");
            $this->load->view("pages/listeExercice",$data);
            $this->load->view("templates/footer");
        }

        public function set_choix($idExercice){
            $this->ExerciceCourant->set_courant($idExercice);
            $this->load_view();
        }

        public function cloture($idExercice){
            if($this->ExerciceCourant->get_ecriture_courant($idExercice)!=null){
                $this->load_view("Existence ecriture en cours non valide");
                return;
            }
            $this->ExerciceCloture->set_cloture($idExercice);
            //Only 1 to 5
            $compteReports = $this->Plans->solde_compte($idExercice);
            $idExo = $this->Exercice->get_ex_recent();

            if($compteReports != null && $idExo != null){
                foreach ($compteReports as $report ) {
                    $this->CompteReporte->insert($report["idcompte"],$idExercice,$idExo,$report["solde"]);
                }
            }

            $result = $this->Exercice->get_result($idExercice);
            $this->Exercice->set_result($idExercice,$result);
            $this->load_view();
        }
    }
?>