<?php 
    class EcritureEnCourController extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model("Journal");
            $this->load->model("ExerciceCourant");
            $this->load->model("JournalCloture");
        }


        public function insert($idJournal){
            $this->form_validation->set_rules('mois','Mois','required');
            
            $id = $this->ExerciceCourant->get_ex_courant();
            $mois = $this->input->post("mois");
            $check = $this->JournalCloture->is_cloture($idJournal , $id, $mois);
            if($check==0){
                $test = $this->Journal->can_close($id,$idJournal,$mois);
                if( $test == 0 ){
                    $this->JournalCloture->insert($idJournal,$id,$mois);
                    redirect("/ListeJournalController/load_view");
                }
                else{
                    $error = "Ecriture en cours";
                    redirect("/ListeJournalController/load_view/$error");
                }
            }
            else{
                $error = "Mois deja cloture";
                redirect("/ListeJournalController/load_view/$error");
            }
        }

        
    }


?>