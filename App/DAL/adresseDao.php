<?php
require_once "../model/dbconnexion.php";
/*
* adresseDao.php
* adresseDao
* @author lBV <email@email.com>
* 2020
*/

class adresseDao{

    private $db_connection;

    public function __construct()
    {
        $this->db_connection = db_connexion();
    }

    public function add_adresse(adresseEntity $adresse):void
    {
        $db_connection;

        $id = $adresse->id_adresse;
        $ville = $adresse->ville;
        $codePostale = $adresse->code_postale;
        $numRue = $adresse->num_rue;
        $nomRue = $adresse->nom_rue;
        $lon = $adresse->lon;
        $lat = $adresse->lat;

        $query = 
        "INSERT INTO `adresse` ( `ville`, `code_postale`, `num_rue`, `nom_rue`, `lon`, `lat`) VALUES (:ville, :codePostale, :numRue, :nomRue, :lon, :lat)";
        $stmt = $db_connection->prepare($query);
        $stmt->execute([':ville' => $ville, ':codePostale' => $codePostale, ':num_rue' => $numRue, ':nom_rue' => $nomRue, ':lon' => $lon, ':lat' => $lat]);
    }
}