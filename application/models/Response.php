<?php
    class Response extends MY_Model{

      public function response_for($id_question){
        $sql = "select * from reponse where id_question = $id_question";
        $query = $this->db->query($sql);
        return $query->result_array();
      }
      
    }
?>