<?php
namespace App\Dal;
use App\Model\ConnexionDb;

abstract class AbstractDao
{
    protected $db_connexion;
    protected $pdo;

    public function __construct()
    {
        $this->db_connexion = new ConnexionDb();
        $this->pdo = $this->db_connexion->pdo;
    }
}