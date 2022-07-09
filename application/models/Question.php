<?php
    class Question extends MY_Model{

      public function next_question($id_client){
        $sql = "SELECT * from question where id_question not in (select id_question from reponse_client where id_client = $id_client) limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
      }
    }
?>