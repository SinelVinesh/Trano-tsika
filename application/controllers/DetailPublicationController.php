<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPublicationController extends My_Controller {

	public function next_commentaire($id_pub){
		$this->load->model("Publication");
		$limit = $_SESSION["limit_comment"];
		$offset =  $_SESSION["offset"];
		$data["commentaires"] = $this->Publication->get_limited_commentaire($id_pub,$limit,$offset);
		$_SESSION["offset"] = $offset + $limit;
		// echo json_decode($data["commentaires"]);
		print_r($data);
	}

	public function load_detail($id_pub)
	{
		$this->load->model('Publication');
		$this->load->model('Message');
		$pub = array();

		$pub = $this->Publication->get_pub($id_pub);
		$pub["commentaires"] = $this->Publication->get_commentaire($id_pub);
		$pub["id_client"] = $this->Publication->get_id_client($id_pub);
		$pub["detail_tags"] = $this->Publication->get_detail_tags($id_pub);
		$pub["detail_utils"] = $this->Publication->get_detail_utilite($id_pub);
		$pub["photos"] = $this->Publication->get_photo($id_pub);
		$_SESSION["limit_comment"] = 3;
		$_SESSION["offset"] = 3;
		$pub["commentaires"] = $this->Publication->get_limited_commentaire($id_pub,3,0);
		$pub["messages"] = $this->Message->get_messages($_SESSION["id_client"], $id_pub);
		$data["pub"] = $pub;
        // echo json_encode($pub);
		$this->load->view('pages/fiche.php',$data);
		// print_r($pub);
	}//lat //lng

	public function comment($id_pub)
	{
        $this->form_validation->set_rules('commentaire','Commentaire','required');
        if ($this->form_validation->run()){
			$this->load->model('Commentaire');
            $this->Commentaire->insert($id_pub,$_SESSION["id_client"],$this->input->post("commentaire"));
        }
		$this->load_detail($id_pub);
	}

	function envoyer($id_receiver,$id_pub){
		$this->load->model('Message');
		$this->form_validation->set_rules('message_texte','Message','required');
		if ($this->form_validation->run()){
			$this->Message->insert($_SESSION["id_client"],$id_pub,$id_receiver,$this->input->post("message_texte"));
		}
		$this->load_detail($id_pub);
	}
}
