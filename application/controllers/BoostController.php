<?php
    class BoostController extends MY_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->testAuthentication();
        }
        public function pay_boost($id_pub){
            $this->load->model('Boost');
            $duration =$this->input->post("duration");
            $account =$this->input->post("account");
            if($duration != ""){
                $date_debut=date('Y-m-d');
                $d=strtotime("+".$duration." weeks");
                $date_fin=date('Y-m-d',$d);
                $this->Boost->insert($id_pub,$date_debut,$date_fin);
                redirect(site_url("pub/$id_pub"));
            }
            else{
                redirect(site_url("pub/$id_pub"));
            }
        }
    }
?>
