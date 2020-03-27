<?php
namespace App\Dal;
use App\Model\MembreEntity;
/*
* membreDao.php
* membreDao
* @author lBV <email@email.com>
* 2020
*/

class membreDao{

    public function add_membre(MembreEntity $membre):void
    {
        $pdo = $this->db_connexion;

        $id = $membre->id_membre;
        $solde = $membre->membre_solde;
        $prenom = $membre->membre_prenom;
        $nom = $membre->membre_nom;
        $email = $membre->membre_email;
        $utilisateur_id = $membre->utilisateur_id;

        $query = 
        "INSERT INTO `membre` (`membre_prenom`, `membre_nom`, `membre_email`, `membre_solde`, `utilisateur_id`) 
        VALUES ($prenom, $nom, $email, $solde, $utilisateur_id)";


    }
}