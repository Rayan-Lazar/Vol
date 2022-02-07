<?php
session_start();
if(isset($_POST['name']) && isset($_POST['password']))
{
  //connexion base de donnée
    require_once '../BDD/BDD.php'

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
  //  $name = mysqli_real_escape_string($db,htmlspecialchars($_POST['name']));
    //$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

    if($name !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where
              nom= '".$name."' and mot_de_passe = '".$password."' ";
        $exec_requete
        $reponse      = mysqli_fetch_array($exec_requete);S
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['name'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: connexion.php');
}

?>
