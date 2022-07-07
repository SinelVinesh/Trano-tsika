<?php 
    class LivreJournalController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Journal");
            $this->load->model("ExerciceCourant");
            $this->load->model("Mvt");
        }

        public function load_view($idJournal){
            
            $id = $this->ExerciceCourant->get_ex_courant();
            $data['mouvements'] = $this->Journal->livre($idJournal,$id);
            $data['journal'] = $this->Journal->get_by_id($id);
            $data["DC"] = $this->Mvt->get_DC($data['mouvements']);
            $this->load->view("templates/header");
            $this->load->view("pages/livreJournal",$data);
            $this->load->view("templates/footer");
        }

        public function lister($idJournal){
            $this->load_view($idJournal);
        }
    }
    
?>
