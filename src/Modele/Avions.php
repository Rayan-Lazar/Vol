<?php
require_once '../BDD/BDD.php';
class Avions
{
    private $avion;

    public function getAvion()
    {
        return $this->avion;
    }

    public function setAvion()
    {
        $bdd = new BDD();
        $req = $bdd->setPdo()->prepare('SELECT nom FROM avion ');
        $req->execute(array());

        $donnee = $req->fetchAll();
        return $donnee;
    }


}