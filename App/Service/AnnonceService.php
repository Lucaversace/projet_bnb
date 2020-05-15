<?php
namespace App\Service;

use App\Dal\AnnonceDao;
use App\Model\AnnonceEntity;

class AnnonceService
{
    public function add_annonce(AnnonceEntity $annonce)
    {
        $annonceDao = new AnnonceDao();
        $stmt = $annonceDao->add_annonce($annonce);
        return $stmt;
    }

    public function get_annonce_by_id($id_annonce)
    {
        $annonceDao = new AnnonceDao();
        $ligne = $annonceDao->get_annonce_by_id($id_annonce);
        return $ligne;
    }

    public function get_search_annonce($nb_voyageur, $ville):array
    {
        $annonceDao = new AnnonceDao();
        $ligne = $annonceDao->get_search_annonce($nb_voyageur, $ville);
        return $ligne;
    }

    public function get_annonce_by_id_membre($id_membre)
    {
        $annonceDao = new AnnonceDao();
        $results = $annonceDao->get_annonce_by_id_membre($id_membre);
        return $results;
    }
    public function exist_image($filename, $id_annonce)
    {
        $annonceDao = new AnnonceDao();
        $stmt = $annonceDao->exist_image($filename, $id_annonce);
        return $stmt;
    }
    public function insert_image($filename, $id_annonce)
    {
        $annonceDao = new AnnonceDao();
        $stmt = $annonceDao->insert_image($filename, $id_annonce);
        return $stmt;
    }
    public function get_id_annonce_recent($id_membre)
    {
        $annonceDao = new AnnonceDao();
        $ligne = $annonceDao->get_id_annonce_recent($id_membre);
        return $ligne;
    }
    public function get_id_image()
    {
        $annonceDao = new AnnonceDao();
        $ligne = $annonceDao->get_id_image();
        return $ligne;
    }
    public function add_id_image_annonce($id_annonce, $id_image)
    {
        $annonceDao = new AnnonceDao();
        $stmt = $annonceDao->get_id_image($id_annonce, $id_image);
        return $stmt;
    }
    public function get_all_image_by_id_annonce($id_annonce)
    {
        $annonceDao = new AnnonceDao();
        $results = $annonceDao->get_all_image_by_id_annonce($id_annonce);
        return $results;
    }
    public function get_first_image_by_id_annonce($id_annonce)
    {
        $annonceDao = new AnnonceDao();
        $results = $annonceDao->get_first_image_by_id_annonce($id_annonce);
        return $results;
    }
}