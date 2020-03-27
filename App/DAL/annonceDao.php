<?php
namespace App\Dal;
use App\Model\AnnonceEntity;

/*
* annonceDao.php
* annonceDao
* @author lBV <email@email.com>
* 2020
*/

class AnnonceDao extends AbstractDao
{

    public function add_annonce(AnnonceEntity $annonce):void
    {
        $pdo = $this->db_connexion;

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