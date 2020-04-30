<?php
namespace App\Service;

use App\Dal\MembreDao;
use App\Model\MembreEntity;

class MembreService
{
    public function add_membre(MembreEntity $membre)
    {
        $membredao = new MembreDao();
        $membredao->add_membre($membre);
    }

    public function log_connexion(MembreEntity $membre)
    {
        $membredao = new MembreDao();
        $ligne = $membredao->log_connexion($membre);
        return $ligne;
    }
}