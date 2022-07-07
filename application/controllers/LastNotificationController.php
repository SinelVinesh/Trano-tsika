<?php 

class LastNotificationController extends CI_Controller{
	public function index(){
		$this->load->model('Client');
		$data = array();
		$data['last_notifications'] = $this->Client->get_last_notifications($_SESSION["id_client"]);
		$this->load->view('last_notification',$data);
	}
}
 ?>




