<?php

class DiscussionController extends  MY_Controller
{

    public function get($id_pub) {
        $this->load->model("Message");
        $data["messages"] = $this->Message->get_messages($_SESSION["id_client"], $id_pub);
        $this->load->view("pages/discussion", $data);
    }

}