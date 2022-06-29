<?php 

class LastMessageController extends CI_Controller{
	public function index(){
		$this->load->model('Client');
		$data = array();
		$data['last_messages'] = $this->Client->get_last_message($_SESSION["id_client"]);
		$this->load->view('last_message',$data);
	}
}
 ?>
