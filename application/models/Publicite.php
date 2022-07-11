<?php
    class Publicite extends MY_Model{

        public function count_all(){
            $query = $this->db->query("select count(id_publicite) nb from publicite")->row_array();
            return $query["nb"] ;
        }

        public function rand_pub(){
            $nb = rand(0,$this->count_all());
            $query = $this->db->query("select * from publicite where id_publicite = $nb ")->row_array();
            return $query;
        }
    }
?>