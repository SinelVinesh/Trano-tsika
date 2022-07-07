<?php

class AjoutEcritureController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Plans");
        $this->load->model("Ecriture");
        $this->load->model("Mvt");
        $this->load->model("Devise");
        $this->load->model("Tiers");
        $this->load->model("ExerciceCourant");
        $this->load->model("Journal");
    }

    public function load_view($jour = "", $ref = "", $lib = "", $error = "", $success = "")
    {
        $data = array();
        //Liste des comptes
        $data["devises"] = $this->Devise->get_all();
        $data["tiers"] = $this->Tiers->getAll();
        $data["plans"] = $this->Plans->get_all();
        $data["jour"] = $this->input->post("jour");
        $data["ref"] = $this->input->post("reference");
        $data["lib"] = $this->input->post("libelle");
        $data["error"] = $error;
        $data["success"] = $success;
        $data["journal"] = $this->Journal->get_by_id($_COOKIE["journal"]);


        if (isset($_COOKIE["mois"]) && isset($_COOKIE["journal"])) {
            $idEcriture = $this->Ecriture->get_id_ecriture_en_cours_journal($_COOKIE["mois"], $_COOKIE["journal"]);
            $data["numEcriture"] = $idEcriture["idecriture"];
            $data["mvts"] = ($idEcriture["exist"]) ? $this->Mvt->get_all_mvt_en_cours($idEcriture["idecriture"]) : array();
            $data["DC"] = $this->Mvt->get_DC($data["mvts"]);

            $this->load->view("templates/header");
            $this->load->view("pages/ajoutEcriture", $data);
            $this->load->view("templates/footer");
        } else {
            redirect("/SelectionJournalController/load_view");
        }
    }

    private function set_rules()
    {
        $names = array("jour", "reference", "libelle", "compte");

        //To make the inputs required
        foreach ($names as $name) {
            $this->form_validation->set_rules($name, $name, 'required');
        }

        // $this->form_validation->set_rules('reference','Reference','callback_check_sameRef');

        //Only number
        $this->form_validation->set_rules('debit', 'Debit', 'regex_match[/^[0-9]*$/]');
        $this->form_validation->set_rules('credit', 'Credit', 'regex_match[/^[0-9]*$/]');
        $this->form_validation->set_rules('jour', 'Jour', 'regex_match[/^[0-9]*$/]');


        $this->form_validation->set_rules('tiers', 'Tiers', 'callback_check_tiers');
        $this->form_validation->set_rules('tauxDevise', 'taux devise', 'callback_check_taux');
        $this->form_validation->set_rules('qttDevise', 'Qtt devise', 'callback_check_qtt');

        //check debit/credit 
        $this->form_validation->set_rules('debit', 'Debit', 'callback_check_DC');
    }

    public function check_tiers()
    {
        $compte = $this->Plans->get_by_id($this->input->post('compte'));
        $tiers = $this->input->post('tiers');

        if ($compte == "") {
            $this->form_validation->set_message('check_tiers', "");
            return FALSE;
        }
        if ($compte["numero"][0] == "4" && $tiers == "") {
            $this->form_validation->set_message('check_tiers', "Un tiers doit etre lie a un compte 4");
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_taux()
    {
        if ($this->input->post("devise") != "1" && $this->input->post('tauxDevise') == "") {
            $this->form_validation->set_message('check_taux', "Le taux est requise");
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_qtt()
    {
        if ($this->input->post("devise") != 1 && $this->input->post("qttDevise") == "") {
            $this->form_validation->set_message('check_qtt', "La quantite de devise est requise");
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function check_DC()
    {
        $debits = $this->input->post('debit');
        $credits = $this->input->post('credit');
        $messages = array(
            "Un mouvement ne peut contenir debit et credit en meme temps",
            "Un mouvement doit contenir au moins un debit ou un credit", "Veuillez ajouter valeur a 
            debit ou credit"
        );

        if ($debits == "0" && $credits == "0") {
            $this->form_validation->set_message('check_DC', $messages[2]);
            return FALSE;
        }

        if ($debits != "" && $debits != "0" && $credits != "" && $credits != "0") {
            $this->form_validation->set_message('check_DC', $messages[0]);
            return FALSE;
        }

        //tsy maintsy misy ny iray
        if ($debits == "" && $credits == "") {
            $this->form_validation->set_message('check_DC', $messages[1]);
            return FALSE;
        }
        return TRUE;
    }

    public function create_date()
    {
        $s_date = explode("-", $_COOKIE["mois"]);
        return $s_date[0] . "-" . $s_date[1] . "-" . $this->input->post("jour");
    }

    public function get_all_values()
    {
        $result = array();
        $result["date"] = $this->create_date();
        $result["reference"] = $this->input->post("reference");
        $result["libelle"] = $this->input->post("libelle");
        $result["idcompte"] = $this->input->post("compte");
        $result["idtiers"] = ($this->input->post("tiers") == "") ? 0 : $this->input->post("tiers");
        $result["iddevise"] = $this->input->post("devise");
        $result["tauxdevise"] = ($this->input->post("tauxDevise") == "") ? 0 : $this->input->post("tauxDevise");
        $result["qttdevise"] = ($this->input->post("qttDevise") == "") ? 0 : $this->input->post("qttDevise");
        $result["debit"] = ($this->input->post("debit") == "") ? 0 : $this->input->post("debit");
        $result["credit"] = ($this->input->post("credit") == "") ? 0 : $this->input->post("credit");
        return $result;
    }

    public function insert($idEcriture)
    {
        $this->set_rules();

        if ($this->form_validation->run()) {
            $values = $this->get_all_values();
            // echo "success";
            if (!$this->Ecriture->is_id_exist($idEcriture)) {
                $this->Ecriture->new_ecriture(
                    $idEcriture,
                    $this->ExerciceCourant->get_ex_courant(),
                    $_COOKIE["journal"],
                    $values["reference"],
                    $values["libelle"],
                    $_COOKIE["mois"]
                );
            }
            try {
                //check if
                $this->Mvt->new_mvt(
                    $idEcriture,
                    $values["iddevise"],
                    $values["idcompte"],
                    $values["idtiers"],
                    $values["libelle"],
                    $values["date"],
                    $values["tauxdevise"],
                    $values["qttdevise"],
                    $values["debit"],
                    $values["credit"]
                );
                $this->load_view($this->input->post("jour"), $values["reference"], $values["libelle"], "", "Inserer avec succes");
            } catch (PDOException $e) {
                $error_pattern = "/Datetime field overflow/i";
                //seulemnt les erreur de dates
                if(preg_match($error_pattern, $e->getMessage())){
                    $this->load_view($this->input->post("jour"), $values["reference"], $values["libelle"], "Jour Invalide", "");
                }else{
                    throw $e;
                }
            }
        } else {
            $this->load_view();
        }
    }

    public function annuler_ecriture($idEcriture)
    {
        if ($this->Ecriture->is_id_exist($idEcriture) == false) {
            $this->load_view("", "", "", "L'ecriture n'est pas encore initialise");
        } else {
            $this->Ecriture->annuler($idEcriture);
            $this->load_view();
        }
    }

    public function valider_ecriture($idEcriture)
    {
        $mvts = $this->Mvt->get_all_mvt_en_cours($idEcriture);
        if (count($mvts) == 0) {
            $this->load_view("", "", "", "Pas encore de mvt inserer");
        } else if ($this->Mvt->is_equilibre($mvts) == false) {
            $this->load_view("", "", "", "Pas encore equilibre");
        } else {
            $this->Ecriture->valider($idEcriture);
            $this->load_view();
        }
    }

    public function show_tiers()
    {
        $this->load->view("pages/TiersPopUp");
    }
}
