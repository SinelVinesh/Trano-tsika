<?php 
    class Message extends MY_Model{

        function insert($id_client_sender, $id_pub, $id_client_receiver, $message_texte){
            $sql="INSERT INTO Message (id_client_sender,id_publication, id_client_receiver, date_envoye, message_texte) VALUES (%s,%s,%s,now(),%s)";
            $sql=sprintf($sql,$this->db->escape($id_client_sender),$this->db->escape($id_pub),$this->db->escape($id_client_receiver),$this->db->escape($message_texte));
            // echo $sql;
            $this->db->query($sql);
        }

        function get_messages($idClient, $id_pub){
            $condition = "id_publication = $id_pub and (id_client_sender=$idClient or id_client_receiver=$idClient)";
            return $this->get_all("v_message",$condition);
        }
    }
