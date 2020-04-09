<?php
namespace App\Dal;
use App\Model\AdresseEntity;

/*
* adresseDao.php
* adresseDao
* @author lBV <email@email.com>
* 2020
*/

class AdresseDao extends AbstractDao
{
    public function add_adresse(AdresseEntity $adresse):void
    {
        $pdo = $this->db_connexion;

        $id = $adresse->id_adresse;
        $ville = $adresse->ville;
        $codePostale = $adresse->code_postale;
        $numRue = $adresse->num_rue;
        $nomRue = $adresse->nom_rue;
        $lon = $adresse->lon;
        $lat = $adresse->lat;

        $query = 
        "INSERT INTO `adresse` ( `ville`, `code_postale`, `num_rue`, `nom_rue`, `lon`, `lat`) 
        VALUES (:ville, :codePostale, :numRue, :nomRue, :lon, :lat)";

        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':ville' => $ville,
            ':codePostale' => $codePostale,
            ':num_rue' => $numRue,
            ':nom_rue' => $nomRue,
            ':lon' => $lon,
            ':lat' => $lat]);
    }
}