<?php
    class BoostController extends MY_Controller{
        public function pay_boost(){
            $this->load->model('Boost');
            $inputs=["account_number,duration,id_publication"];
            $datas= $this->get_datas($inputs,"post");

            $this->form_validation->set_rules('account_number','AccountNumber','required');
            $this->form_validation->set_rules('duration','Duration','required');
            $this->form_validation->set_rules('id_publication','id_Publication','required');
            if ($this->form_validation->run()){
                $date_debut=date('Y-m-d');
                $d=strtotime("+".$datas["duration"]." weeks");
                $date_fin=date('Y-m-d',$d);
                $this->Boost->insert($datas["id_publication"],$date_debut,$date_fin,$datas["account_number"]);
                http_response_code(200);
            }
            else{
                http_response_code(400);
            }
        }
    }
?>
