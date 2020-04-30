<?php
namespace App\Dal;
use App\Model\MembreEntity;
use PDO;
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
        $pdo = $this->pdo;

        $prenom = $membre->membre_prenom;
        $nom = $membre->membre_nom;
        $email = $membre->membre_email;
        $mdp = $membre->mdp;
        $role = $membre->role;

        $query = 
        "INSERT INTO membre (prenom, nom, email, mdp, role) VALUES (:prenom, :nom, :email, :mdp, :role)";

        $stmt = $pdo->prepare($query);
        $stmt->execute([
        ':prenom' => $prenom, 
        ':nom' => $nom, 
        ':email' => $email, 
        ':mdp' => $mdp, 
        ':role' => $role]);

    }

    public function log_connexion(MembreEntity $membre)
    {
        $pdo = $this->pdo;

        $email = $membre->membre_email;

        $query = 
        "SELECT * FROM membre WHERE email = :email";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':email' => $email]);

        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);

        return $ligne;
    }
}