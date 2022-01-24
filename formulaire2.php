<?php

require_once 'formulaire.php'; // j'ai besoin du fichier suivant

$date_depart = new date_depart();
$date_arrivée = new date_arrivée();
$heure_depart = new heure_depart();
$heure_arrivée = new heure_arrivée();

$date_depart->afficher();
$date_arrivée->afficher();
$heure_depart->afficher();
$heure_arrivée->afficher();

 ?>
