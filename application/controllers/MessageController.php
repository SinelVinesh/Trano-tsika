<?php
    class MessageController extends MY_Controller{

        public function load_message(){
            $this->load->model('Message');
            $this->load->model('Publication');
            $data = array();
            $inputs = ["client1","client2","id_pub"];
            $tab = $this->get_datas($inputs, "get");
            
            $data["messages"] = $this->Message->getMessages($tab["client1"],$tab["client2"],$tab["id_pub"]);
            $data["publication"] = $this->Publication->get_pub($tab["id_pub"]);

            $this->load_view('pages/discussion',$data);
        }

        function envoyer($id_receiver,$id_pub){
            $this->load->model('Message');
            $this->form_validation->set_rules('message_texte','Message','required');

            if ($this->form_validation->run()){
                $this->Message->insert($_SESSION["id_client"],$id_pub,$id_receiver,$this->input->post["message_texte"]);
            }

            echo json_encode(["sucess" => true]);
        }
    }
?>