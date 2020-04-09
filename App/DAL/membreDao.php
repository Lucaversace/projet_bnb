<?php
namespace App\Dal;
use App\Model\MembreEntity;
/*
* membreDao.php
* membreDao
* @author lBV <email@email.com>
* 2020
*/

class membreDao extends AbstractDao
{
    public function add_membre(MembreEntity $membre):void
    {
        $pdo = $this->db_connexion;

        $prenom = $membre->membre_prenom;
        $nom = $membre->membre_nom;
        $email = $membre->membre_email;
        $mdp = $membre->mdp;
        $role = $membre->role;

        $query = 
        "INSERT INTO `membre` (`membre_prenom`, `membre_nom`, `membre_email`, `mdp`, `role`) 
        VALUES (:prenom, :nom, :email, :mdp, :role)";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':prenom' => $prenom, ':nom' => $nom, ':email' => $email, ':mdp' => $mdp, ':role' => $role]);


    }
}