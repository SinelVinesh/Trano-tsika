<?php 
    class LivreTiersController extends CI_Controller {

        public function  __construct(){
            parent::__construct();
            $this->load->model("Tiers");
            $this->load->model("Mvt");
        }

        public function getLivre($idTiers)
        {
            $livres = $this->Tiers->getLivre($idTiers);
            $currentTiers = $this->Tiers->getElement($idTiers);

            $data['firstTiers'] = $currentTiers['nom'];
            $data['tiers'] = $livres;
            $data['DC'] = $this->Mvt->get_DC($data["tiers"]);

            $this->load->view("templates/header");
            $this->load->view("pages/livreTiers",$data);
            $this->load->view("templates/footer");
        }

        public function load_view()
        {
         
        }
    } 
?>