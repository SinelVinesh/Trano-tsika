<?php 
    class Location extends MY_Model{
        
        public function get_all(){
            $sql = "SELECT * FROM Localisation";
            $query = execute_query($sql);
            return $query->result_array();
        }
    }
?>