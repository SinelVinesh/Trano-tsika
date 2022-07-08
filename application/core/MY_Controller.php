<?php 
    class My_Controller extends CI_Controller {

        private $page_footer = "";
        private $page_header = "";

        function __construct(){
            parent::__construct();
            session_start();
        } 

        /**
         * Author: Aina
         * 
         * params: page, data
         * page : the page that we want to load
         * data : datas we want to share with the page 
         *
         * Load a page
         */
        public function load_view($page, $data=null){
            // $this->load->view($this->page_header,$data);
            $this->load->view($page,$data);
            // $this->load->view($this->page_footer,$data);
        }

        /**
         * Author: Aina
         * params: input_names array , method
         * input_names: name of the inputs 
         * method: http method
         * 
         * Get all submitted data in a dictionnary
         */
        public function get_datas($input_names,$method){
            $datas = [];

            if (strcasecmp($method,"post") == 0){
                foreach ($input_names as $name) {
                    # code...
                    $datas[$name] = $this->input->post($name);
                }
            }else if (strcasecmp($method,"get") == 0){
                foreach ($input_names as $name) {
                    # code...
                    $datas[$name] = $this->input->get($name);
                }
            }else{
                throw new Exception("Method unknown");
            }
            return $datas;
        }
         
    }