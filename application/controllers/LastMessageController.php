<?php 

class LastMessageController extends MY_Controller {
	public function index(){
		$this->load->model('Client');
		$data = array();
		$data['last_messages'] = $this->Client->get_last_messages($_SESSION["id_client"]);
		echo json_encode($data);
//		$this->load->view('last_message',$data);
	}
}
 ?>
