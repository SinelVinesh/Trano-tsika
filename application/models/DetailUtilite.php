<?php
    class DetailUtilite extends MY_Model{
        public function insert($id_publication,$id_utilite){
            $sql="INSERT INTO Detail_utilite(id_detail_utilite,id_publication,id_utilite) VALUES (default,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_utilite));
            $this->db->query($sql);
        }
    }
?>