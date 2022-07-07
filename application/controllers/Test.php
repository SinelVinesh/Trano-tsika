<?php 
    class Test extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('NombreChar');
            $this->load->model('Comptes');
            $this->load->model('Plans');
        }

        public function hello_world(){
            echo "hello world";
        }

        public function list(){
            print_r($this->NombreChar->get_all());
            print_r($this->Comptes->get_all());
            $this->Plans->insert('21300','this is a simple test');
            print_r($this->Plans->get_all());
        }
    } 
?>