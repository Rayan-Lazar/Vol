<?php

class Vol
{
    private $select;
    private $insert;
    private $update;
    private $delete;


    public function getSelect()
    {
        return $this->select;
    }

    public function setSelect()
    {
        $bdd = new BDD();
        $req = $bdd->setPdo()->prepare('SELECT * FROM vol ');
        $req->execute(array());

        $donnee = $req->fetchAll();
        return $donnee;
    }

    public function getInsert()
    {
        return $this->select;
    }

    public function setInsert()
    {
      $bdd = new BDD();
      $req = $bdd->setPdo()->prepare('Insert * FROM vol ');
      $req->execute(array());

      $donnee = $req->fetchAll();
      return $donnee;
    }

    public function getUpdate()
    {
        return $this->select;
    }

    public function setupdate()
    {
        return $this->select;
    }

    public function getDelete()
    {
        return $this->select;
    }

    public function setDelete()
    {
        return $this->select;
    }
}
