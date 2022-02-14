<?php
require_once '../BDD/BDD.php';

$bdd = new BDD();
$req=$bdd->setPdo()->prepare('SELECT * FROM client WHERE email like :email');
$req->execute(array(
    'email'=>$_POST['email']

));

$res = $req->fetch();

if($res){
    echo 'Compte existant';
}
else {

    $requete = $bdd->setPdo()->prepare('INSERT INTO client (nom,email,mot_de_passe) VALUES (:nom,:email,:mot_de_passe)');
    $requete->execute(array(
        'nom' => $_POST['nom'],
        'email' => $_POST['email'],
        'mot_de_passe' => $_POST['mot_de_passe']


    ));
    header('Location: connexion.php');
}

 ?>
