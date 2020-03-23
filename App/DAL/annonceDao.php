<?php
require_once "../model/dbconnexion.php";

/*
* annonceDao.php
* annonceDao
* @author lBV <email@email.com>
* 2020
*/

class annonceDao{

    private $db_connection;

    public function __construct()
    {
        $this->db_connection = db_connexion();
    }

    public function add_annonce(annonceEntity $annonce):void
    {
        $db_connection;

        $id = $annonce->id_annonce;
        $titre = $annonce->annonce_titre;
        $descrip = $annonce->annonce_descrip;
        $places = $annonce->annonce_places;
        $prix = $annonce->annonce_prix_pers;
        $url_img = $annonce->url_img;
        $membre = $annonce->annonce_membre_id;
        $adresse = $annonce->adresse_id;

        $query = 
        "INSERT INTO `annonce` (`id_annonce`, `titre`, `description`, `nb_places`, `prix_personne`, `url_photo`, `membre_id`, `adresse_id`) 
        VALUES ($id, $titre, $descrip, $places, $prix, $url_img, $membre, $adresse)";

    }
}