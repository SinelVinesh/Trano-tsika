<?php
    class MessageController extends MY_Controller{
        function load_view(){
            $this->load->model('Message');
            $data = array();
            $inputs = ["client1","client2"];
            $tab = $this->get_data($inputs, "post"); 
            $data["messages"] = $this->Message->get_all($tab["client1"],$tab["client2"]);
            $this->load_view('message.php',$data);
        }

        function envoyer(){
            $this->load->model('Message');
            $inputs = ["id_client_sender","id_client_receiver","message_texte"];
            $datas = $this->get_data($inputs, "post");
            $this->form_validation->set_rules('message','Message','required');
            if ($this->form_validation->run()){
                $this->Message->insert($datas["id_client_sender"],$datas["id_client_receiver"],now(),$datas["message_texte"]);
            }
        }
    }
?>