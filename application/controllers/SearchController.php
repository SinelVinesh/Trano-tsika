<?php 
    class SearchController extends MY_Controller {

        public function search(){
            $this->load->model('Publication');

            $input_names = array('titre','location','prix_min','prix_max','room_min','room_max','tags','tags_util');
            $datas = get_datas($input_names,'post');
            $data = array();
            $data['result'] = $this->Publication->search($datas['titre'],$datas['location'],$datas['prix_min'],$datas['prix_max'],$datas['room_min'],$datas['room_max'],$datas['tags'],$datas['tags_util']);
            load_view("search.php",$data);
        }
    }
?>