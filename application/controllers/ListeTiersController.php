<?php 
    class ListeTiersController extends CI_Controller {

        public function  __construct(){
            parent::__construct();
            $this->load->model("Tiers");
        }

        public function liste(){
            $data['tiers'] = $this->Tiers->getAll();

            $this->load->view("templates/header");
            $this->load->view("pages/listeTiers",$data);
            $this->load->view("templates/footer");
        }
    } 
?>