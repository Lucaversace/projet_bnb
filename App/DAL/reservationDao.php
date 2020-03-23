<?php

require_once "../model/dbconnexion.php";
require_once "../model/Reservation.php";
/*
* reservationDao.php
* reservationDao
* @author lBV <email@email.com>
* 2020
*/

class reservationDao{

    private $db_connection;

    public function __construct()
    {
        $this->db_connection = get_default_connection();
    }

    public function add_reservation(reservationEntity $reservation):void
    {
        $cx = mysqli_connect(
            $this->db_connection['cx_server'], 
            $this->db_connection['cx_login'],
            $this->db_connection['cx_pwd'], 
            $this->db_connection['cx_dbname']);

        $id = $reservation->id_reservation;
        $dateDeb = $reservation->date_resa_deb;
        $dateFin = $reservation->date_resa_fin;
        $annonces = $reservation->annonces_id;
        $membre = $reservation->membre_id;
        $nb_personnes = $reservation->nb_personnes;



        $query = 
        "INSERT INTO `reservation` (`date_deb`, `date_fin`, `annonces_id`, `membre_id`, `nb_personne`) 
         VALUES ($dateDeb, $dateFin, $annonces, $membre, $nb_personnes)";

        mysqli_query($cx, $query);

        mysqli_close($cx);
    }
}