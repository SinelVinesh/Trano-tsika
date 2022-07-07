<?php
    class Photo extends MY_Model{
        public function insert($id_img,$lien_photo, $id_publication){
            $sql="INSERT INTO Photo(id_photo,lien_photo,id_publication) VALUES (%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_img),$this->db->escape($lien_photo),$this->db->escape($id_publication));
            echo $sql;
            $this->db->query($sql);
        }
    }
?>