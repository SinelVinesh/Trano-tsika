<?php
    class BoostController extends MY_Controller{
        public function pay_boost($id_pub,$duration){
            $this->load->model('Boost');
            $inputs=["account_number,duration"];
            $datas= $this->get_datas($inputs,"post");

            if ($this->form_validation->run()){
                $date_debut=date('Y-m-d');
                $d=strtotime("+".$datas["duration"]." weeks");
                $date_fin=date('Y-m-d',$d);
                $this->Boost->insert($id_pub,$date_debut,$date_fin);
                http_response_code(200);
            }
            else{
                http_response_code(400);
            }
        }
    }
?>
