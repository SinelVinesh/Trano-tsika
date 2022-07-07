<?php 
    class AjoutJournalController extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Journal");
        }

        public function load_view($success=null){
            $data["success"] = $success;
            $this->load->view("templates/header");
            $this->load->view("pages/ajoutJournal",$data);
            $this->load->view("templates/footer");
        }

        private function set_rules(){
            $this->form_validation->set_rules('nom','Nom','required');
        }

        public function insert(){
            $this->set_rules();
            if($this->form_validation->run()){
                $nom = $this->input->post('nom');
                $this->Journal->insert($nom);
                $this->load_view("Ajouter avec success");
            }
            else{
                $this->load_view();
            }
        }
    
    }

?>