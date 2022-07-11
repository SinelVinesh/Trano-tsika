<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPublicationController extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->testAuthentication();
    }

	public function next_commentaire($id_pub){
		$this->load->model("Publication");
		$limit = $_SESSION["limit_comment"];
		$offset =  $_SESSION["offset"];
		$data["commentaires"] = $this->Publication->get_limited_commentaire($id_pub,$limit,$offset);
		$_SESSION["offset"] = $offset + $limit;
		echo displayComments($data['commentaires']);
	}

	public function load_detail($id_pub)
	{
		$this->load->model('Publication');
		$this->load->model('Message');
		$this->load->model('Question');
		$this->load->model('Publicite');
		$this->load->model('Reponse');
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
        $pub["pos"] = $this->Publication->getPosition($id_pub);

        $this->load->model("Location");
        $this->load->model("DetailTag");
        $this->load->model("DetailUtilite");

        $data["locations"] = $this->Location->get_locations();
        $data["tags"] = $this->DetailTag->get_tags();
        $data["utils"] = $this->DetailUtilite->get_utilities();

		$data["publicite"] = $this->Publicite->rand_pub();


        $survey["question"] = $this->Question->next_question($_SESSION["id_client"]);
        if($survey["question"]){
            $survey["reponses"] = $this->Reponse->reponse_for($survey["question"]["id_question"]);
        }
        else{
            $survey = null;
        }

        $data["survey"] = $survey;
		$data["pub"] = $pub;
		$data["user_like"] = $this->user_like($id_pub);
		$this->load->view('pages/fiche.php',$data);
	}

	public function user_like ($id_pub){
		$this->load->model('Reaction');
		$reaction = $this->Reaction->get_reaction($id_pub,$_SESSION["id_client"]);
		return ($reaction) ? $reaction["id_reaction_item"] : 0;
	}

	public function like($id_pub){
		$this->load->model('Reaction');
		$this->load->model('Publication');
		$react = $this->Reaction->get_reaction($id_pub,$_SESSION["id_client"]);
		if(!empty($react)){
			$this->Reaction->remove_reaction($react["id_reaction"]);
			if($react["id_reaction_item"]==1){
				$pub = $this->Publication->get_pub($id_pub);
				echo $pub["nblike"]."/".$pub["nbunlike"];
				return;
			}
		}
		$this->Reaction->insert_like($id_pub,$_SESSION["id_client"]);	
		$pub = $this->Publication->get_pub($id_pub);
		echo $pub["nblike"]."/".$pub["nbunlike"];
	}

	public function dislike($id_pub){
		$this->load->model('Reaction');
		$this->load->model('Publication');
		$react = $this->Reaction->get_reaction($id_pub,$_SESSION["id_client"]);
		if(!empty($react)){
			$this->Reaction->remove_reaction($react["id_reaction"]);
			if($react["id_reaction_item"]==2){
				$pub = $this->Publication->get_pub($id_pub);
				echo $pub["nblike"]."/".$pub["nbunlike"];
				return;
			}
		}
		$this->Reaction->insert_dislike($id_pub,$_SESSION["id_client"]);
		$pub = $this->Publication->get_pub($id_pub);
		echo $pub["nblike"]."/".$pub["nbunlike"];
	}

	public function comment($id_pub)
	{
        $this->form_validation->set_rules('commentaire','Commentaire','required');

        if ($this->form_validation->run()){
			$this->load->model('Commentaire');
            $this->Commentaire->insert($id_pub,$_SESSION["id_client"],$this->input->post("commentaire"));
        }

		echo json_encode(["success" => true]);
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
