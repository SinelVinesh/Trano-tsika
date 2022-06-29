<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPublicationController extends My_Controller {

	public function load_detail()
	{
		$this->load->model('Publication');
		$pub = array();
		$inputs = ["id_pub"];
		$data = $this->get_datas($inputs,"get");
		$pub["publication"] = $this->Publication->get_publication($data["id_pub"]);
		$pub["commentaires"] = $this->Publication->get_commentaire($data["id_pub"],3);
		$pub["detail_tags"] = $this->Publication->get_details_tags($data["id_pub"]);
		$pub["detail_utils"] = $this->Publication->get_detail_utilite($data["id_pub"]);
		$pub["photos"] = $this->Publication->get_photo($data["id_pub"]);
		$this->load->view('detail_publication.php',$pub);
	}

	public function comment()
	{
		$this->load->model('Commentaire');
		$inputs = ["id_pub","id_client","texte_commentaire"];
        $datas = $this->get_datas($inputs,"post");
        $this->form_validation->set_rules('commentaire','Commentaire','required');
		
        if ($this->form_validation->run()){
            $this->Commentaire->insert($datas["id_pub"],$datas["id_client"],$datas["texte_commentaire"]);
			http_response_code(200);
        }else{
			http_response_code(400);
		}
	}
}
