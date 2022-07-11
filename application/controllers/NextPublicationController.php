<?php
class NextPublicationController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->testAuthentication();
    }
    public function index()
    {
        $this->load->model('Publication');
        $this->load->model('Publicite');

        $limit = $_SESSION["limit"];
        $offset = $_SESSION["offset"];

        $publicite =  ($offset % 12 == 0) ? $this->Publicite->rand_pub() : null;
            
        $pubs = $this->Publication->get_next_pub($limit, $offset,$_SESSION["id_client"]);

        for ($i = 0; $i < count($pubs); $i++) {
            $photos = $this->Publication->get_photo($pubs[$i]["id_publication"]);
            $pubs[$i]["photo"] = $photos[0];
        }
        $_SESSION["offset"] = $offset + $limit;
        echo displayPubs($pubs,$publicite);
    }
}
