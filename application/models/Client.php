<?php
    class Client extends MY_Model{
        public function exist($email, $password){
            $this->get_row("Client","Email='$email' and password=md5('$password')");
        }

        public function insert($first_name,$last_name,$date_birth,$phone,$email,$password)
        {
            $sql = "insert into Client(first_name,last_name,date_birth,phone,email,password) values('".$first_name."','".$last_name."','".$date_birth."','".$phone."','".$email."',md5('".$password."'));";
            $this->db->query($sql);
        }
    }
?>