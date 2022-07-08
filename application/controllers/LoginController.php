<?php
    class LoginController extends MY_Controller{

        public function index(){
            $this->load_view('pages/log.php'); 
        }

        public function log(){
            $inputs = ["email","password"];
            //autoload session + form_validation
            
            $datas = $this->get_datas($inputs,"post");
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');
            echo("test");
            $data = array();

            if ($this->form_validation->run()){
                $this->load->model('Client');
                $client = $this->Client->exist($datas["email"],$datas["password"]);
                if(empty($client)==false) {
                    $_SESSION["id_client"] = $client["id_client"];
                    $_SESSION["first_name"] = $client["first_name"];
                    $_SESSION["last_name"] = $client["last_name"];
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