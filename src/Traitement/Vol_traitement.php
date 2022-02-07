<?php
require_once '../Modele/Voll.php';

$vol = new Voll(array(
    'DateDepart'=>$_POST['date_depart'],
    'HeureDepart'=>$_POST['heure_depart'],
    'HeureArrivee'=>$_POST['heure_arrivee'],
    'RefPilote'=>$_POST['ref_pilote'],
    'RefAvion'=>$_POST['ref_avion'],
));

$vol->setInsert();
    header('Location: ../../index.php');
?>
