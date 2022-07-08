<?php
    class LoginController extends MY_Controller{

        public function index(){
            $this->load_view('pages/log.php'); 
        }

        public function log(){
            $this->load->model('Client');
            $inputs = ["email","password"];
            //autoload session + form_validation
            
            $datas = $this->get_datas($inputs,"post");
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            echo("test");
            $data = array();

            if ($this->form_validation->run()){
                if(empty($this->Client->exist($datas["email"],$datas["password"]))==false) {
                    $this->load->library('session');
                    $this->session->set_userdata($datas);
                    // redirect(''); 
                    echo ("success");
                }else{
                    $data["error"] = "Verifier votre email ou mot de passe";
                    $this->load_view('pages/log.php',$data); 
                }
            }else{
                $this->load_view('pages/log.php',$data);  
            }
              
        } 
    }
?>