<?php
    class ReponseClient extends MY_Model{
        public function insert($id_client,$id_question){
            $this->db->query("insert into reponse_client values (default,$id_client,$id_question)");
        }
    }
?>