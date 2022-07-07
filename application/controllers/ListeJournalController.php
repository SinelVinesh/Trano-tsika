<?php 
    class ListeJournalController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Journal");
            $this->load->model("Exercice");
            $this->load->model("ExerciceCourant");
        }

        public function load_view($error=""){
            $id = $this->ExerciceCourant->get_ex_courant();
            $data["error"] = $error;
            $data["dates"] = $this->Exercice->get_all_dates($id);
            $data["journaux"] = $this->Journal->get_all();
            $this->load->view("templates/header");
            $this->load->view("pages/listeJournal",$data);
            $this->load->view("templates/footer");
        }

    }
?>