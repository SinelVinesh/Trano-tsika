<?php 
    class InscriptionController extends MY_Controller {

        public function confirm_password(){
            if(strcmp($this->input->post('password'), $this->input->post('re_password'))==0){
                return TRUE;
            }
            else{
                $this->form_validation->set_message('confirm_password', 'Verifier votre mot de passe');
                return FALSE;
            }
        }

        public function set_rules(){
            $this->form_validation->set_rules('first_name','First name','required');
            $this->form_validation->set_rules('last_name','Last name','required');
            $this->form_validation->set_rules('date_birth','Date of birth','required');
            $this->form_validation->set_rules('phone','Phone Number','required|regex_match[/^\d*$/]|max_length[10]|min_length[10]');
            $this->form_validation->set_rules('email','Email','required|is_unique[client.email]');
            $this->form_validation->set_rules('password','Password','required');
            $this->form_validation->set_rules('re_password','Confirm password','required|callback_confirm_password');
        }

        public function inscription(){
            $this->load->library('form_validation');
            $this->set_rules();
            $data = array();

            if($this->form_validation->run()){
                $this->load->model('Client');
                $input_names = array('first_name','last_name','date_birth','phone','email','password');
                $datas = $this->get_datas($input_names,'post');
                $this->Client->insert($datas['first_name'],$datas['last_name'],$datas['date_birth'],$datas['phone'],$datas['email'],$datas['password']);
                $data["success"] = "Inserer avec success";
            }
            $this->load_view("pages/log.php",$data);
        }
    }
?>