<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("ExerciceCourant");
		$this->load->model("Exercice");
	}

	public function index(){
		$this->load_page();
	}		

	public function load_page($page="index")
	{
		$id_courant = $this->ExerciceCourant->get_ex_courant();
		$is_closed = $this->ExerciceCourant->is_closed($id_courant);
		$data['date_debut'] = 
		$data["exCourant"] = $this->Exercice->get_ex_courant();

		$data['resultat'] = 0; $data['ecritures'] = array();

		if( $is_closed ){
			$data['resultat'] = $this->ExerciceCourant->get_result($id_courant);
		}
		else if( !$is_closed ){
			$data['ecritures'] = $this->ExerciceCourant->get_ecriture_courant($id_courant);
		}

		$this->load->view("templates/header");
		$this->load->view("pages/".$page,$data);
		$this->load->view("templates/footer");
	}

	public function page_missing(){
		$this->load->view("pages/error_404");
	}
}
