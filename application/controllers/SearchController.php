<?php 
    class SearchController extends MY_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->testAuthentication();
        }
        public function index($pubs=null,$len=0) {
            $this->load->model("Location");
            $this->load->model("DetailTag");
            $this->load->model("DetailUtilite");
            $this->load->model('Question');
            $this->load->model('Reponse');
            $this->load->model('Publicite');

            $survey["question"] = $this->Question->next_question($_SESSION["id_client"]);
            if($survey["question"]){
                $survey["reponses"] = $this->Reponse->reponse_for($survey["question"]["id_question"]);
            }
            else{
                $survey = null;
            }

            for ($i = 0; $i < count($pubs); $i++) {
                $photos = $this->Publication->get_photo($pubs[$i]["id_publication"]);
                $pubs[$i]["photo"] = $photos[0];
            }

            $data["survey"] = $survey;
            $data["locations"] = $this->Location->get_locations();
            $data["tags"] = $this->DetailTag->get_tags();
            $data["utils"] = $this->DetailUtilite->get_utilities();
            $data["pubs"] = $pubs;
            $data["len"] = $len;
            $data["publicite"] = $this->Publicite->rand_pub();

            $this->load->view("pages/search.php",$data);
        }

        public function searchMulti(){
            $this->load->model('Publication');
            $input_names = array('titre','location','prix','chambre');
            $data = $this->get_datas($input_names,'post');
            $data["tags"] = $this->input->post('tags[]');
            $data["tags_util"] = $this->input->post('tags_util[]');

            
            $pubs = $this->Publication->search($data['titre'],$data['location'],$data['prix']['min'],$data['prix']['max'],$data['chambre']['min'],$data['chambre']['max'],
            $this->input->post('tags[]'),$this->input->post('tags_util[]')
            ,$_SESSION["limit"],0,$_SESSION["id_client"]);

            $_SESSION["option"] = 1;
            $_SESSION["criterias"] = $data;
            $_SESSION["offset_search"] = 6;
            $_SESSION["len"] = $this->Publication->count_search($data['titre'],$data['location'],$data['prix']['min'],
            $data['prix']['max'],$data['chambre']['min'],$data['chambre']['max'],$this->input->post('tags[]'),$this->input->post('tags_util[]')
            ,$_SESSION["limit"],0);

            $this->index($pubs,$_SESSION["len"]);
        }

        public function nextResult(){ 
            $this->load->model('Publication');
            $this->load->model('Publicite');
            $pubs = array();

            if($_SESSION["option"] == 1){
                $data = $_SESSION["criterias"];
                $pubs = $this->Publication->search($data['titre'],$data['location'],$data['prix']['min'],$data['prix']['max'],$data['chambre']['min'],
                $data['chambre']['max'],$data["tags"],$data["tags_util"],$_SESSION["limit"],$_SESSION["offset_search"],$_SESSION["id_client"]);
            }else{
                $pubs = $this->Publication->simpleSearch($_SESSION["criteria"],$_SESSION["limit"],$_SESSION["offset_search"],$_SESSION["id_client"]);
            }            
            for ($i = 0; $i < count($pubs); $i++) {
                $photos = $this->Publication->get_photo($pubs[$i]["id_publication"]);
                $pubs[$i]["photo"] = $photos[0];
            }
            $publicite =  ($_SESSION["offset_search"] % 12 == 0) ? $this->Publicite->rand_pub() : null;
            $_SESSION["offset_search"] = $_SESSION["offset_search"] + $_SESSION["limit"];
            echo displayPubs($pubs,$publicite);
        }

        public function simpleSearch(){
            $this->load->model('Publication');
            $criteria = $this->input->get("criteria");

            $_SESSION["option"] = 2;
            $_SESSION["offset_search"] = 6;
            $_SESSION["criteria"] = $criteria;
            $_SESSION["len"] = $this->Publication->count_simple_search($criteria);

            $pubs = $this->Publication->simpleSearch($criteria,$_SESSION["limit"],0,$_SESSION["id_client"]);
            $this->index($pubs,$_SESSION["len"]);
        }
    }
