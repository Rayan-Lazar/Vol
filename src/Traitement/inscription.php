<?php
session_start();
require_once '../BDD/BDD.php'


$req=$bdd->prepare('SELECT * FROM client WHERE email like :email');
$req->execute(array(
    'email'=>$_POST['email']

));

$res = $req->fetch();

if($res){
    echo 'Compte existant';
}
else {

    $requete = $bdd->prepare('INSERT INTO client (nom,prenom,mail,mot_de_passe) VALUES (:nom, :prenom,:mail,:mot_de_passe)');
    $requete->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'mot_de_passe' => $_POST['mot_de_passe'],
        'mail' => $_POST['mail'],


    ));
    header('Location: connexion.php');
}

 ?>
