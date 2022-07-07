<?php 

    class MvtController extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Mvt");
        }

        public function load_view($idEcriture){
            $data["mvts"] = $this->Mvt->get_all_mvt($idEcriture);
            $data["DC"] = $this->Mvt->get_DC($data["mvts"]);

            $this->load->view("templates/header");
            $this->load->view("pages/detailsEcriture",$data);
            $this->load->view("templates/footer");
        }


    }

?>