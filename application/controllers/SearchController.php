<?php 
    class SearchController extends MY_Controller {

        public function index($pubs=null) {
            $this->load->model("Location");
            $this->load->model("DetailTag");
            $this->load->model("DetailUtilite");
            $data["locations"] = $this->Location->get_locations();
            $data["tags"] = $this->DetailTag->get_tags();
            $data["utils"] = $this->DetailUtilite->get_utilities();
            $data["pubs"] = $pubs;
            $this->load->view("pages/search.php",$data);
        }

        public function searchMulti(){
            $this->load->model('Publication');
            $input_names = array('titre','location','prix_min','prix_max','room_min','room_max');
            $data = $this->get_datas($input_names,'post');
            $pubs = $this->Publication->search($data['titre'],$data['location'],$data['prix_min'],$data['prix_max'],$data['room_min'],$data['room_max'],$this->input->post('tags[]'),$this->input->post('tags_util[]'));
            $this->index($pubs);
        }

        public function simpleSearch(){
            $this->load->model('Publication');
            $pubs = $this->Publication->simpleSearch($this->input->get("criteria"));
            $this->index($pubs);
        }
    }
?>