<?php
/*
* membreDao.php
* membreDao
* @author lBV <email@email.com>
* 2020
*/

class annonceDao{

    private $db_connection;

    public function __construct()
    {
        $this->db_connection = get_default_connection();
    }

    public function add_annonce(membreEntity $membre):void
    {
        $cx = mysqli_connect(
            $this->db_connection['cx_server'], 
            $this->db_connection['cx_login'],
            $this->db_connection['cx_pwd'], 
            $this->db_connection['cx_dbname']);

        $id = $membre->id_membre;
        $solde = $membre->membre_solde;
        $prenom = $membre->membre_prenom;
        $nom = $membre->membre_nom;
        $email = $membre->membre_email;
        $utilisateur_id = $membre->utilisateur_id;

        $query = 
        "INSERT INTO `membre` (`membre_prenom`, `membre_nom`, `membre_email`, `membre_solde`, `utilisateur_id`) 
        VALUES ($prenom, $nom, $email, $solde, $utilisateur_id)";

        mysqli_query($cx, $query);

        mysqli_close($cx);
    }
}