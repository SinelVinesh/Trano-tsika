<?php
    class SurveyController extends MY_Controller{
        public function next_survey(){
            $this->load->model("Question");
            $this->load->model("Reponse");

            $survey = $this->Question->next_question($this->input->get("id_client"));
            $survey["reponses"] = $this->Reponse->reponse_for($survey["id_question"]);

            $data["survey"] = $survey;
            $this->load->view("survey",$data);
        }
    }
?>
