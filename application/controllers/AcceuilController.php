<?php

class AcceuilController extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->testAuthentication();
    }

    public function index()
    {
        $this->load->model('Publication');
        $limit = 6;
        $offset = 0;
        $this->load->model("Location");
        $this->load->model("DetailTag");
        $this->load->model("DetailUtilite");

        $this->load->model("Question");
        $this->load->model("Reponse");
        $this->load->model("Publicite");

        $survey["question"] = $this->Question->next_question($_SESSION["id_client"]);
        if ($survey["question"]) {
            $survey["reponses"] = $this->Reponse->reponse_for($survey["question"]["id_question"]);
        } else {
            $survey = null;
        }

        $data["survey"] = $survey;
        $data["locations"] = $this->Location->get_locations();
        $data["tags"] = $this->DetailTag->get_tags();
        $data["utils"] = $this->DetailUtilite->get_utilities();

        $pubs = $this->Publication->get_next_pub($limit, $offset,$_SESSION["id_client"]);

        for ($i = 0; $i < count($pubs); $i++) {
            $photos = $this->Publication->get_photo($pubs[$i]["id_publication"]);
            $pubs[$i]["photo"] = $photos[0];
        }

        $data["publicite"] = $this->Publicite->rand_pub();

        $_SESSION["offset"] = $offset + $limit;
        $_SESSION["limit"] = $limit;

        $data["pubs"] = $pubs;
        $this->load->view("pages/index.php", $data);
    }


    public function comment_pub()
    {
        $this->load->model('Commentaire');
        $inputs = $this->get_datas(["id_pub", "id_client", "comment"], "post");
        $this->Commentaire->insert($inputs["id_pub"], $inputs["id_client"], $inputs["comment"]);
    }
}
