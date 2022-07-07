<?php 
    class AjoutExerciceController extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Exercice");
        }

        public function set_rules(){

            $this->form_validation->set_rules('mois','Mois','required');
            $this->form_validation->set_rules('anne','Anne','required');

        }

        public function load_view($success=null){
            $mois = array("Jan","Fev","Mar","Avr","Mai","Jui","Jui","Aou",
        "Sep","Oct","Nov","Dec");
            $annees = array();
            for ($i=2010; $i <= 2030; $i++) { 
                $annees[] = $i;
            }
            $data["mois"] = $mois;
            $data["annees"] = $annees;
            $data["success"] = $success;
            
            $this->load->view("templates/header");
            $this->load->view("pages/ajoutExercice",$data);
            $this->load->view("templates/footer");
        }

        public function get_date(){
            $debut = $this->input->post("anne")."-".$this->input->post("mois")."-01";
            $dateDebut = strtotime($debut);
            $dateFin = strtotime("+1 year",$dateDebut);
            $dateFin = strtotime("-1 day", $dateFin);
            $result = array();
            $result["debut"] = date("Y-m-d",$dateDebut);
            $result["fin"] = date("Y-m-d",$dateFin);
            return $result;
        }

        public function ajout(){
            $this->set_rules();
            if($this->form_validation->run()){
                $dates = $this->get_date();
                $this->Exercice->save($dates["debut"],$dates["fin"]);
                $this->load_view("Bien ajouter");
            }else{
                $this->load_view();
            }
        }

    }

?>
