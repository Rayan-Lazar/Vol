<?php
class BDD
{
    private $bdd;

    public function setPdo(){
        $bdd = new PDO('mysql:host=localhost;port=3306;dbname=sle_ppe_avion;charset=utf8', 'root', '');
        return $bdd;
    }





}
