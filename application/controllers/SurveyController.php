<?php
    class SurveyController extends MY_Controller{

        public function next_survey(){
            $this->load->model("Question");
            $this->load->model("Reponse");

            $survey["question"] = $this->Question->next_question($_SESSION["id_client"]);
            if(!$survey["question"]){
                return null;   
            }
            $survey["reponses"] = $this->Reponse->reponse_for($survey["question"]["id_question"]);
            return $survey;
        }

        public function response(){
            $tags = $this->input->post("id_tags");
            $id_quest = $this->input->post("id_question");
         
            if($tags != null){
                $this->load->model("Client");
                $this->load->model("ReponseClient");
                $this->ReponseClient->insert($_SESSION["id_client"],$id_quest);
                foreach ($tags as $tag ) {
                    $this->Client->insert_tag_client($_SESSION["id_client"],$tag);
                }
            }
            echo displayNextQuestion($this->next_survey());
        }
    }
?>
