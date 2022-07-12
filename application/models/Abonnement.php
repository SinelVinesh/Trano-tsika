<?php

class Abonnement extends MY_Model
{

    public function s_abonner($id_client) {
        $this->execute_query("insert into abonnement values (default, $id_client, default)");
    }

    public function is_abonner($id_client) {
        $this->get_row("abonnement", " and id_client = $id_client and date_abonnement::date + interval '30 day > current_date::date' ");
    }

}