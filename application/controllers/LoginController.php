<?php
    class LoginController extends MY_Controller{
        public function log(){
            $this->load->model('Client');
            $inputs = ["email","password"];
            //autoload session + form_validation
            $datas = $this->get_datas($inputs,"post");
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            
            if ($this->form_validation->run()){
                if(empty($this->Client->exist($datas["email"],$datas["password"]))==false) {
                    $this->session->set_userdata($datas);
                    redirect('accueilController'); 
                    return;
                }
            }
            $this->load_view('login.php');    
        } 
    }
?>