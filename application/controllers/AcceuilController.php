<?php
    class AcceuilController extends MY_Controller{
        public function index(){
            $this->load->model('Publication');
            $limit = 10;
            $offset = 0;

            $pubs = $this->Publication->get_next_pub($limit,$offset);

        //    foreach($pubs as $pub){
        //         $pub["commentaires"] =$this->Publication->get_commentaire($pub["id_publication"],3);
        //         $pub["photos"] = $this->Publication->get_photo($pub["id_publication"]);
        //    }
           
        //    $_SESSION["offset"] = $offset + $limit;
        //    $_SESSION["limit"] = $limit;

        //    $data["pubs"]=$pubs;

           $this->load->view("pages/index.php");
        }

        public function like_pub(){
            $this->load->model('Reaction');
            $inputs = $this->get_datas(["id_pub","id_client"],"get");
            $this->Reaction->insert_like($inputs["id_pub"],$inputs["id_client"]);
        }

        public function dislike_pub(){
            $this->load->model('Reaction');
            $inputs = $this->get_datas(["id_pub","id_client"],"get");
            $this->Reaction->insert_dislike($inputs["id_pub"],$inputs["id_client"]);
        }

        public function comment_pub(){
            $this->load->model('Commentaire');
            $inputs = $this->get_datas(["id_pub","id_client","comment"],"post");
            $this->Commentaire->insert($inputs["id_pub"],$inputs["id_client"],$inputs["comment"]);
        }
    }
?>