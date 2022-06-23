<?php
    class Client extends MY_Model{
        public function exist($email, $password){
            $this->get_row("Client","Email='$email' and password=md5('$password')");
        }
    }
?>