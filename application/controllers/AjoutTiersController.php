<?php 
    class AjoutTiersController extends CI_Controller {

        public function  __construct(){
            parent::__construct();
            $this->load->model("Tiers");
        }

        public function load_view($message=null){
            $data['success'] = $message;

            $this->load->view("templates/header");
            $this->load->view("pages/ajoutTiers",$data);
            $this->load->view("templates/footer");
        }

        public function insert(){
            $this->form_validation->set_rules('nom','Nom','required');
            
            if($this->form_validation->run())
            {
                $nom = $this->input->post("nom");
                $this->Tiers->newTiers($nom);

                $this->load_view("Le nouveau tiers est pris en compte");
            }else{
                $this->load_view();
            }
        }
    } 
?>