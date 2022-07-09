<?php

    class AcceuilController extends MY_Controller{
        public function index(){
            $this->load->model('Publication');
            $limit = 6;
            $offset = 0;
            $this->load->model("Location");
            $this->load->model("DetailTag");
            $this->load->model("DetailUtilite");

            $this->load->model("Question");
            $this->load->model("Reponse");

            $survey["question"] = $this->Question->next_question($_SESSION["id_client"]);
            $survey["reponses"] = $this->Reponse->reponse_for($survey["question"]["id_question"]);

            $data["survey"] = $survey;
            $data["locations"] = $this->Location->get_locations();
            $data["tags"] = $this->DetailTag->get_tags();
            $data["utils"] = $this->DetailUtilite->get_utilities();

            $pubs = $this->Publication->get_next_pub($limit,$offset);

           foreach($pubs as $pub){
                // $pub["commentaires"] =$this->Publication->get_commentaire($pub["id_publication"],3);
                $photos = $this->Publication->get_photo($pub["id_publication"]);
                if($photos){
                    $pub["photo"] = $photos[0];
                }
           }
           
           $_SESSION["offset"] = $offset + $limit;
           $_SESSION["limit"] = $limit;

           $data["pubs"]=$pubs;

           $this->load->view("pages/index.php",$data);
        }

        public function like_pub($id_pub){
            $this->load->model('Reaction');
            $react = $this->Reaction->get_reaction($id_pub,$_SESSION["id_client"]);
            if(!empty($react)){
                if($react["id_reaction_item"]!=1){
                    $this->Reaction->remove_reaction($react["id_reaction"]);
                }else{
                    return;
                }
            }
            $this->Reaction->insert_like($id_pub,$_SESSION["id_client"]);
        }

        public function dislike_pub($id_pub){
            $this->load->model('Reaction');
            $react = $this->Reaction->get_reaction($id_pub,$_SESSION["id_client"]);
            if(!empty($react)){
                if($react["id_reaction_item"]!=2){
                    $this->Reaction->remove_reaction($react["id_reaction"]);
                }else{
                    return;
                }
            }
            $this->Reaction->insert_dislike($id_pub,$_SESSION["id_client"]);
        }

        public function comment_pub(){
            $this->load->model('Commentaire');
            $inputs = $this->get_datas(["id_pub","id_client","comment"],"post");
            $this->Commentaire->insert($inputs["id_pub"],$inputs["id_client"],$inputs["comment"]);
        }
    }
