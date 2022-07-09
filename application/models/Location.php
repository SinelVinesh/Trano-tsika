<?php 
    class Location extends MY_Model{
        
        public function get_locations(){
            return $this->get_all("localisation");
        }
    }
?>