<?php 

class LastMessageController extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->testAuthentication();
    }
	public function index(){
		$this->load->model('Message');
		$data = array();
		$data['discussions'] = $this->Message->getDiscussionOf($_SESSION["id_client"]);

//		$this->output->set_content_type("application/json");
//		echo json_encode($data);

		$this->load->view('pages/discussions',$data);
	}

}

