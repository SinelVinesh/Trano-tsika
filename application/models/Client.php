<?php
    class Client extends MY_Model{
        
        public function exist($email, $password){
            $this->get_row("Client","Email='$email' and password=md5('$password')");
        }

        public function get_last_messages($id_client)
        {
            $sql = "select * from v_message where id_client_sender=$id_client or id_client_receiver=$id_client order by date_envoye desc limit 5";
            $get_id_client = $this->db->query($sql); 
    
            return $get_id_client->result_array();
        }
        public function get_last_notifications($id_client)
        {
            $sql = "select * from notification where id_client=$id_client order by date_envoye limit 5";
            $get_last_notification = $this->db->query($sql);
    
            return $get_last_notification->result_array();
        }

    }
?>