<?php
    class SurveyController extends MY_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->testAuthentication();
        }
        public function next_survey(){
            $this->load->model("Question");
            $this->load->model("Reponse");

            $survey["question"] = $this->Question->next_question($_SESSION["id_client"]);
            $survey["reponses"] = $this->Reponse->reponse_for($survey["question"]["id_question"]);

            $data["survey"] = $survey;
            print_r($survey);
            // $this->load->view("survey",$data);
        }

        public function response(){
            $tags = $this->input->get("id_tags");
            $this->load->model("Client");
            // print_r($tags);
            // $tags[0] = 1;

            foreach ($tags as $tag ) {
                $this->Client->insert_tag_client($_SESSION["id_client"],$tag);
                    // return http_response_code(400);
            }
            return http_response_code(200);
            // print_r($this->input->get("id_tags"));
        }
    }
?>
