<?php
namespace App\Model;

use PDO;
use PDOException;

abstract class ConnexionDb
{
    private $pdo;
    private $user;
    private $pass;

    public function __construct()
    {   
        $this->user = 'root';
        $this->pass = "root";

        try 
        {
            $this->pdo = new PDO('mysql:host=localhost;dbname=projet_bnb', $this->user, $this->pass);
        } 
        catch (PDOException $e) 
        {
            print "Erreur lors de la connexion à la base de donnée : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
