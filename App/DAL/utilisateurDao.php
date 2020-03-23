<?php
require_once "../model/dbconnexion.php";
/*
* utilisateurDao.php
* utilisateurDao
* @author lBV <email@email.com>
* 2020
*/

class utilisateurDao{

    private $db_connection;

    public function __construct()
    {
        $this->db_connection = get_default_connection();
    }

    public function add_utilisateur(utilisateurEntity $utilisateur):void
    {
        $cx = mysqli_connect(
            $this->db_connection['cx_server'], 
            $this->db_connection['cx_login'],
            $this->db_connection['cx_pwd'], 
            $this->db_connection['cx_dbname']);

        $id = $utilisateur->id_utilisateur;
        $login = $utilisateur->login;
        $mdp = $utilisateur->mdp;

        $query = 
        "INSERT INTO `utilisateur` (`login`, `mdp`) VALUES ($login, $mdp)";

        mysqli_query($cx, $query);

        mysqli_close($cx);
    }
}