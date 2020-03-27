<?php
namespace App\Dal;
use App\Model\ConnexionDb;

abstract class AbstractDao
{
    protected $db_connexion;

    public function __construct()
    {
        $this->db_connection = new ConnexionDb();
    }
}