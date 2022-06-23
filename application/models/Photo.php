<?php
    class Client extends MY_Model{
        public function insert($lien_photo, $id_publication){
            $sql="INSERT INTO Photo(id_photo,lien_photo,id_publication) VALUES (default,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($lien_photo),$this->db->escape($id_publication));
            $this->db->query($sql);
        }
    }
?>