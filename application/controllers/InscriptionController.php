<?php 
    class InscriptionController extends MY_Controller {

        public function confirm_password(){
            if(strcmp($this->input->post('password'), $this->input->post('re_password'))==0){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function email_validation($email){
            if(preg_match( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email)){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function inscription(){
            $this->load->library('form_validation');

            $this->form_validation->set_rules('first_name','First name','required');
            $this->form_validation->set_rules('last_name','Last name','required');
            $this->form_validation->set_rules('date_birth','Date of birth','required');
            $this->form_validation->set_rules('phone','Phone Number','required');
            $this->form_validation->set_rules('email','Email','required|callback_email_validation');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('re_password','Confirm password','required|callback_email_validation');

            if($this->form_validation->run() == FALSE){
                load_view("inscription.php");
            }
            else{
                $this->load->model('Client');
                $input_names = array('first_name','last_name','date_birth','phone','email','password');
                $datas = get_datas($input_names,'post');
                $this->Client->insert($datas['first_name'],$datas['last_name'],$datas['date_birth'],$datas['phone'],$datas['email'],$datas['password']);
            }
        }
    }
?>