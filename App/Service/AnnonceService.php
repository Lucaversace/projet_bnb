<?php
namespace App\Service;

use App\Dal\AnnonceDao;
use App\Model\AnnonceEntity;

class AnnonceService
{
    public function add_annonce(AnnonceEntity $annonce)
    {
        $annonceDao = new AnnonceDao();
        $annonceDao->add_annonce($annonce);
    }

    public function get_annonce(AnnonceEntity $annonce)
    {
        $annonceDao = new AnnonceDao();
        $ligne = $annonceDao->get_annonce($annonce);
        return $ligne;
    }

    public function get_search_annonce($nb_voyageur, $ville):array
    {
        $annonceDao = new AnnonceDao();
        $ligne = $annonceDao->get_search_annonce($nb_voyageur, $ville);
        return $ligne;
    }
}