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

    public function get_membre_by_id($id)
    {
        $pdo  = $this->pdo;
        $id_membre = $id;

        $query = "SELECT * FROM membre  WHERE id = :id_membre";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_membre' => $id_membre]);
        $membre = $stmt->fetch(PDO::FETCH_OBJ);

        return $membre;
    }


    public function update_user($id,$email, $mdp, $solde)
    {
        $pdo = $this->pdo;
        $id_membre = $id;
        $newSolde = $solde;
        $newPassword = $mdp;
        $newEmail = $email;

        $query = "UPDATE membre SET solde = :newSolde, mdp = :newPassword, email = :newEmail WHERE id = :id_membre";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_membre' => $id_membre, ':newPassword' => $newPassword, ':newEmail' => $newEmail, ':newSolde' => $newSolde]);

        return $stmt->rowCount();
    }
}