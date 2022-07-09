<?php
    class Question extends MY_Model{

      public function next_question($id_client){
        $sql = "select * from v_unfinished_question where id_client = $id_client limit 1";
        $query = $this->db->query($sql);
        return $query->row_array();
      }
    }
?>