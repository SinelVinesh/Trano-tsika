<?php

class AbonnementController extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->testAuthentication();
    }

    public function makeAbonnement () {

        $this->load->model("Abonnement", "abn");
        $this->form_validation->set_rules("account", "numero de compte bancaire", "required");

        if ($this->form_validation->run()) {
            $this->abn->s_abonner($_SESSION['id_client']);
            $_SESSION['abonnement'] = true;
        }

        redirect(site_url("AcceuilController"));
    }

}