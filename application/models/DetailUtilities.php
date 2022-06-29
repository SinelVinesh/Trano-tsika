<?php 
    class DetailUtilities extends MY_Model{
        
        public function get_all(){
            $sql = "SELECT * FROM v_detail_utilite";
            $query = execute_query($sql);
            return $query->result_array();
        }
    }
?>