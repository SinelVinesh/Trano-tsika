<?php 
    class Message extends MY_Model{
        function insert($id_client_sender, $id_client_receiver, $date_envoye, $message_texte){
            $sql="INSERT INTO Message(id_client_sender, id_client_receiver, date_envoye, message_texte) VALUES (default,%s,%s.",".'$date_envoye'.",".'$message_texte'.)";
            $sql=sprintf($sql,$this->db->escape($id_client_sender),$this->db->escape($id_client_receiver));
            $this->db->query($sql);
        }

        function get_all($idClient1, $idClient2){
            $this->get_all("v_message_client","idClient1=".$idClient1." and idClient2=".$idClient2);
        }
    }
?>