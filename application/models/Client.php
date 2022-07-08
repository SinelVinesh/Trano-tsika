<?php
    class Client extends MY_Model{
        
        public function exist($email, $password){
            return $this->get_row("Client","Email='$email' and password=md5('$password')");
        }

        public function get_last_messages($id_client)
        {
            $sql = "select * from v_message where id_client_sender=$id_client or id_client_receiver=$id_client order by date_envoye desc limit 5";
            $get_id_client = $this->db->query($sql);

            return $get_id_client->result_array();
        }

        public function get_last_notifications($id_client)
        {
            $sql = "select * from v_notifications where id_client_receiver=$id_client order by date_envoye limit 5";
            $lasts = $this->db->query($sql)->result_array();

            for ($i = 0; $i < count($lasts); $i++){
                if($lasts[$i]['type'] === 'commentaire') {
                    $lasts[$i]['description'] = $this
                        ->db
                        ->query("select titre from publication where id_publication=(select id_publication from commentaire where id_commentaire=".$lasts[$i]['id_message'].")")
                        ->row_array()['titre'];
                }

                else {
                    $lasts[$i]['description'] = $this
                        ->db
                        ->query("select message_texte from message where id_message=".$lasts[$i]['id_message'])
                        ->row_array()['message_texte'];
                }
            }
    
            return $lasts;
        }

        public function insert($first_name,$last_name,$date_birth,$phone,$email,$password)
        {
            $sql = "insert into Client(first_name,last_name,date_naissance,phone_number,email,password) values('".$first_name."','".$last_name."','".$date_birth."','".$phone."','".$email."',md5('".$password."'));";
            $this->db->query($sql);
        }

    }
?>