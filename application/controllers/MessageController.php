<?php
    class MessageController extends MY_Controller{

        public function load_message(){
            $this->load->model('Message');
            $this->load->model('Publication');
            $data = array();
            $inputs = ["client1","client2","id_pub"];
            $tab = $this->get_datas($inputs, "get");
            
            $data["messages"] = $this->Message->get_messages($tab["client1"],$tab["client2"],$tab["id_pub"]);
            $data["publication"] = $this->Publication->get_pub($tab["id_pub"]);
            
            $this->load_view('message.php',$data);
        }

        function envoyer(){
            $this->load->model('Message');
            $inputs = ["id_client_sender","id_pub","id_client_receiver","message_texte"];
            $datas = $this->get_datas($inputs, "post");
            $this->form_validation->set_rules('message','Message','required');
            if ($this->form_validation->run()){
                $this->Message->insert($datas["id_client_sender"],$datas["id_pub"],$datas["id_client_receiver"],$datas["message_texte"]);
            }
        }
    }
?>