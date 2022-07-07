<?php 
    class BalanceController extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model("ExerciceCourant");
            $this->load->model("Balance");
        }

        public function load_view($data){
            $this->load->view("templates/header");
            $this->load->view("pages/listeBalance",$data);
            $this->load->view("templates/footer");
        }

        public function view_balance(){
            $id = $this->ExerciceCourant->get_ex_courant();
            $data["balances"] = $this->Balance->all_balance($id);
            $this->load_view($data);
        }

        public function balance_filtre(){
            $id = $this->ExerciceCourant->get_ex_courant();
            $date = $this->input->get("date");
            $data["balances"] = $this->Balance->balance_filtre($date,$id);
            $this->load_view($data);
        }

    }

?>