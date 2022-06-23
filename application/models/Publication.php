<?php
    class Publication extends MY_Model{
        public function insert($id_publication, $id_client, $id_location,$titre,$description, $prix,$lieu,$date_publication,$latitude,$longitude,$nbr_piece,$surface){
            $sql="INSERT INTO Publication(id_publication, id_client,id_location,titre,description,prix,lieu,date_publication,latitude,longitude, nbr_piece,surface) values(%s, %s, %s, %s, %s, %s,%s,%s,%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_client),$this->db->escape($id_location),$this->db->escape($titre),$this->db->escape($description),$this->db->escape($prix),$this->db->escape($lieu),$this->db->escape($date_publication),$this->db->escape($latitude),$this->db->escape($longitude),$this->db->escape($nbr_piece),$this->db->escape($surface));
            $this->db->query($sql);
        }
    }
?>