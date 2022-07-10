<?php 

class LastNotificationController extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->testAuthentication();
	}
	public function index(){
		$this->load->model('Client');
		$data = array();
		$data['notifications'] = $this->Client->get_last_notifications($_SESSION["id_client"]);
//		echo json_encode($data);
		$this->load->view('pages/notifications',$data);
	}
}
 ?>




