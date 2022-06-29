<?php 
    class NextPublicationController extends MY_Controller{
       public function index(){
           $this->load->model('Publication');

           $limit = $_SESSION["limit"];
           $offset = $_SESSION["offset"];

           $pubs = $this->Publication->get_next_pub($limit,$offset);

           foreach($pubs as $pub){
                $pub["commentaires"] =$this->Publication->get_commentaire($pub["id_publication"],3);
                $pub["photos"] = $this->Publication->get_photo($pub["id_publication"]);
           }
           
           $_SESSION["offset"] = $offset + $limit;
           $this->load->view("publications",$datas["pubs"]=$pubs);
       }
    }
?>