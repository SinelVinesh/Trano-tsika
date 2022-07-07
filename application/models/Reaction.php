<?php
    class Reaction extends MY_Model{

        //mbola tsy fantatra hoe inona ny like dia inona ny dislike
        public function insert_like($id_publication, $id_client){
            $sql="INSERT INTO Reaction(id_publication, id_client,id_reaction_item) values(%s, %s, 1)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_client));
            $this->db->query($sql);
        }

        public function insert_dislike($id_publication, $id_client){
            $sql="INSERT INTO Reaction(id_publication, id_client,id_reaction_item) values(%s, %s, 2)";
            $sql=sprintf($sql,$this->db->escape($id_publication),$this->db->escape($id_client));
            $this->db->query($sql);
        }
    }
?>