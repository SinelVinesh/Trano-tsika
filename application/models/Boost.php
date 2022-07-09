<?php
    class Boost extends MY_Model{
        public function insert($id_pub, $date_debut, $date_fin){
            $sql="INSERT INTO Boost(id_boost,id_publication,date_debut,date_fin) VALUES (default,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_pub),$this->db->escape($date_debut),$this->db->escape($date_fin));
            $this->db->query($sql);
        }
    }
?>