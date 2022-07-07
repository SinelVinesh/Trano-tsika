<?php
    class PlanController extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model("Comptes");
            $this->load->model("Plans");
            $this->load->model("NombreChar");
        }

        public function load_view($page,$data){
            $this->load->view("templates/header");
            $this->load->view("pages/${page}",$data);
            $this->load->view("templates/footer");
        }

        public function upload_csv_file($filename){
            
            if(!file_exists("files/".$filename)){
                move_uploaded_file($_FILES["fichier"]["tmp_name"],"files/".$filename);
            }
        }

        public function get_csv($filename){
            $fp = fopen("files/".$filename,"r");
            $content = array();
            $read = array();

            while(($read = fgetcsv($fp,10000,$this->input->post("separateur")))){
                $content[] = $read; 
            }

            fclose($fp);
            return $content;
        }

        public function insert_base(){
            $filename = $_FILES["fichier"]["name"];
            $_POST["type"] = $filename;
            $this->form_validation->set_rules('type','Type','required|regex_match[/^.*\.csv$/]');
            $this->form_validation->set_rules('separateur','Separateur','required');

            if($this->form_validation->run()){
                $this->upload_csv_file($filename);
                $content = $this->get_csv($filename);

                for($i = 1; $i<count($content); $i++){
                    $this->Plans->insert($content[$i][0],$content[$i][1]);
                }
                $this->before_insert("Inserer avec succes");
            }else{
                $this->before_insert();
            }
        }
        
        public function before_insert($success=null){
            $data = array();
            $data["racines"] = $this->Comptes->get_all();
            $data["success"] = $success;
            $this->load_view("ajoutCompte",$data);
        }

        private function set_rules(){
            $maxLength = $this->NombreChar->get_max()-1;
            $ruleCompte = "required|regex_match[/^\d[1-9]\d*$/]|max_length[${maxLength}]|callback_unik_num";
            //3 eme chiffre different de 0 et la taille max
            //le numero doit etre unique

            $this->form_validation->set_rules('racine','Racine','required');
            $this->form_validation->set_rules('compte','Compte',$ruleCompte);
            $this->form_validation->set_rules('intitule','Intitule','required');     
        }

        public function unik_num(){
            $numero = $this->input->post('racine').$this->input->post('compte');
            $numero = str_pad($numero,$this->NombreChar->get_max(),'0');
            if($this->Plans->exist($numero)){
                $this->form_validation->set_message('unik_num', "Le numero ${numero} existe deja");
                return FALSE;
            }
            return TRUE;
        }

        public function insert(){
            $this->set_rules();

            if($this->form_validation->run()){
                $numero = $this->input->post('racine').$this->input->post('compte');
                $numero = str_pad($numero,$this->NombreChar->get_max(),'0');
                $this->Plans->insert($numero,$this->input->post('intitule'));
                $this->before_insert("Ajouter avec success");
            }else{
                $this->before_insert();
            }
        }

        public function list_to_pdf(){
            $this->load->helper('fpdf');
            $pdf = new PDF();
            $pdf->AddPage();
            $pdf->SetFont('Arial','B',16);
            $pdf->planTable(array('Compte','Intitule'),$this->Plans->get_all( array('numero','intitule')));
            $pdf->Output();
        }

        public function liste_plan(){
            $data = array();
            $data["plans"]=$this->Plans->get_all($this->input->get("compte"),$this->input->get("intitule")); 
            $this->load_view("listePlan",$data);
        }
    }
?>