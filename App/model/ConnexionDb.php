<?php
namespace App\Model;

use PDO;
use PDOException;

class ConnexionDb
{
    public $pdo;
    private $user;
    private $pass;

    public function __construct()
    {   
        $this->user = "root";
        $this->pass = "";

        try 
        {
            $this->pdo = new PDO("mysql:host=localhost:3306;dbname=projet_bnb", $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } 
        catch (PDOException $e) 
        {
            print "Erreur lors de la connexion à la base de donnée : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
