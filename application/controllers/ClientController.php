<?php

class ClientController extends MY_Controller
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

        $pubs = $this->Publication->get_pub_by($limit, $offset,$_SESSION["id_client"]);

        for ($i = 0; $i < count($pubs); $i++) {
            $photos = $this->Publication->get_photo($pubs[$i]["id_publication"]);
            $pubs[$i]["photo"] = $photos[0];
        }

        $data["publicite"] = null;

        $_SESSION["offset"] = $offset + $limit;
        $_SESSION["limit"] = $limit;

        $data["pubs"] = $pubs;
        $this->load->view("pages/profil.php", $data);
    }

    public function next_pub_client()
    {
        $this->load->model('Publication');

        $limit = $_SESSION["limit"];
        $offset = $_SESSION["offset_client"];

        $pubs = $this->Publication->get_pub_by($limit, $offset,$_SESSION["id_client"]);

        for ($i = 0; $i < count($pubs); $i++) {
            $photos = $this->Publication->get_photo($pubs[$i]["id_publication"]);
            $pubs[$i]["photo"] = $photos[0];
        }

        $_SESSION["offset_client"] = $offset + $limit;
        echo displayPubs($pubs,null);
    }
}
