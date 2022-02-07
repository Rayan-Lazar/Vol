<?php

$bdd = new PDO('mysql:host=localhost;port=3306;dbname=sle_ppe_avion;charset=utf8', 'root', '');
    $req = $bdd->prepare('UPDATE vol SET date_depart = :date_depart ,heure_depart = :heure_depart, heure_arrivee = :heure_arrivee, ref_pilote = :ref_pilote WHERE ref_avion = :ref_avion');
    $req->execute(array(
        'date_depart' => $_POST['date_depart'],
        'heure_depart' => $_POST['heure_depart'],
        'heure_arrivee' => $_POST['heure_arrivee'],
        'ref_pilote' => $_POST['ref_pilote'],
        'ref_avion' => $_POST['ref_avion'],
    ));
    header('Location: ../../index.php');
?>
