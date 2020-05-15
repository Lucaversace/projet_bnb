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

    public function get_membre_by_id($id)
    {
        $membredao = new MembreDao();
        $membre = $membredao->get_membre_by_id($id);
        return $membre;
    }

    public function update_user($id,$email, $mdp, $solde)
    {
        $membredao = new MembreDao();
        $stmt = $membredao->update_user($id,$email,$mdp,$solde);
        return $stmt;
    }
    public function exist_user($email)
    {
        $membredao = new MembreDao();
        $stmt = $membredao->exist_user($email);
        return $stmt;
    }
    public function update_passwd($email, $passwd)
    {
        $membredao = new MembreDao();
        $stmt = $membredao->update_passwd($email, $passwd);
        return $stmt;
    }
    public function update_solde($id_membre, $solde)
    {
        $membredao = new MembreDao();
        $stmt = $membredao->update_solde($id_membre, $solde);
        return $stmt;
    }
}