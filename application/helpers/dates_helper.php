<?php

function displayDate($date) {
    $intervalle = date_diff(new DateTime($date, new DateTimeZone("Africa/Nairobi")), new DateTime("Africa/Nairobi"));
    $d = $intervalle->d;
    $base_str = "il y a %s %s(s)";

    if ($d > 6) {
        return $date;
    }

    if($d > 0) {
        return sprintf($base_str, $d, "jour");
    }

    $h = $intervalle->h;

    if ($h > 0 ) {
        return sprintf($base_str, $h, "heure");
    }

    $m = $intervalle->i;

    if ($m > 0) {
        return sprintf($base_str, $m, "minute");
    }

    $s = $intervalle->s;

    if ($s > 10) {
        return sprintf($base_str, $s, "seconde");
    }

    return "a l'instant";
}
