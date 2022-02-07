<?php

$bdd = new PDO('mysql:host=localhost;port=3306;dbname=sle_ppe_avion;charset=utf8', 'root', '');
    $req = $bdd->prepare('DELETE * FROM Vol');
    $req->execute(array(
        'date_depart' => $_POST['date_depart'],
        'heure_depart' => $_POST['heure_depart'],
        'heure_arrivee' => $_POST['heure_arrivee'],
        'ref_pilote' => $_POST['ref_pilote'],
        'ref_avion' => $_POST['ref_avion'],
    ));
    header('Location: ../../index.php');
?>
