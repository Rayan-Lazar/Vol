<?php

//...
require_once '../BDD/BDD.php';
// Votre code
//...
// Connexion à la base de données
//...
// Vérification des données saisies par l'utilisateur
//...
// Enregistrement des données dans la base
//...

// Récupération des variables nécessaires au mail de confirmation
$email = $_POST['email'];
$login = $_POST['login'];

// Génération aléatoire d'une clé
$cle = md5(microtime(TRUE)*100000);


// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
$bdd = new BDD();
$req = $bdd->prepare("INSERT INTO client VALUE = ('cle')");
$req->bindParam(':cle', $cle);
$req->bindParam(':login', $login);
$req->execute();


// Préparation du mail contenant le lien d'activation
$destinataire = $email;
$sujet = "Activer votre compte" ;
$entete = "From: inscription@votresite.com" ;

// Le lien d'activation est composé du login(log) et de la clé(cle)
$message = 'Bienvenue sur VotreSite,
 
Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
ou copier/coller dans votre navigateur Internet.
 
http://votresite.com/activation.php?log='.urlencode($login).'&cle='.urlencode($cle).'
 
 
---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';


mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail

//...
// Fermeture de la connexion
//...
// Votre code
//...