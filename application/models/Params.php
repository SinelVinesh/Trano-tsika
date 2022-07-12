<?php

class Params extends MY_Model
{

    public function boostInfo() {
        return $this->get_row("parametre", "designation='boost' order by id_parametre desc");
    }

    public function abonnementInfo() {
        return $this->get_row("parametre", "designation='abonnement' order by id_parametre desc");
    }

}