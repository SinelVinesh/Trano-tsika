<?php 
    class SearchController extends MY_Controller {

        public function index() {
            $this->load->view("pages/search.php");
        }

        public function search(){
            $this->load->model('Publication');

            $input_names = array('titre','location','prix_min','prix_max','room_min','room_max','tags','tags_util');
            $datas = $this->get_datas($input_names,'get');
            $data = array();
            $data['results'] = $this->Publication->search($datas['titre'],$datas['location'],$datas['prix_min'],$datas['prix_max'],$datas['room_min'],$datas['room_max'],$datas['tags'],$datas['tags_util']);
            $this->load_view("search.php",$data);
        }
    }
?>