<?php
    class Publication extends MY_Model{
        public function insert($id_publication, $id_client, $id_location,$titre,$description, $prix,$lieu,$latitude,$longitude,$nbr_piece,$surface){
            $sql="INSERT INTO Publication(id_publication, id_client,id_location,titre,description,prix,lieu,date_publication,latitude,longitude, nbr_piece,surface) values(%s, %s, %s, %s, %s, %s,%s,NOW(),%s,%s,%s,%s)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_client),$this->db->escape($id_location),$this->db->escape($titre),$this->db->escape($description),$this->db->escape($prix),$this->db->escape($lieu),$this->db->escape($latitude),$this->db->escape($longitude),$this->db->escape($nbr_piece),$this->db->escape($surface));
            $this->db->query($sql);
        }

        public function get_all($limit,$offset){
            $sql="SELECT * from v_Publication offset %s limit %s";
            $sql=sprintf($sql,$this->db->escape($offset),$this->db->escape($limit));
            $query=$this->db->query($sql);
            return $query->row_array();
        }

        public function get_number_comment($id_publication){
            $sql="SELECT count(*) as total_comment from Commentaire where id_publication = %s";
            $sql=sprintf($sql,$this->db->escape($id_publication));
            $query=$this->db->query($sql);
            return $query->row_array();
        }

        public function get_number_like($id_publication){
            $sql="SELECT count(*) as total_like from 
                Reaction as r join Reaction_item as ri on r.id_reaction_item = ri.id_reaction_item 
                where id_reaction_item = 1 and id_publication = %s";
            $sql=sprintf($sql,$this->db->escape($id_publication));
            $query=$this->db->query($sql);
            return $query->row_array();
        }

        public function get_number_like($id_publication){
            $sql="SELECT count(*) as total_dislike from 
                Reaction as r join Reaction_item as ri on r.id_reaction_item = ri.id_reaction_item 
                where id_reaction_item = 2 and id_publication = %s";
            $sql=sprintf($sql,$this->db->escape($id_publication));
            $query=$this->db->query($sql);
            return $query->row_array();
        }
    }
?>