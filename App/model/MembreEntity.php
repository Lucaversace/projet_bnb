<?php
namespace App\Model;
/*
* membre.php
* membreEntity
* @author lBV <email@email.com>
* 2020
*/

class MembreEntity
{
    public $id_membre;
    public $membre_prenom;
    public $membre_nom;
    public $membre_email;
    public $membre_solde;
    public $mdp;
    public $role;

    public function __construct($resultSql=null)
    {   
        if($resultSql != null)
        {
            $this->id_membre = $resultSql->id;
            $this->membre_prenom = $resultSql->prenom;
            $this->membre_nom = $resultSql->nom;
            $this->membre_email = $resultSql->email;
            $this->membre_solde = $resultSql->solde;
            $this->mdp = $resultSql->mdp;
            $this->role = $resultSql->role;

        }
    }
}