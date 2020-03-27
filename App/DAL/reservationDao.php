<?php
namespace App\Dal;
use App\Model\ReservationEntity;
/*
* reservationDao.php
* reservationDao
* @author lBV <email@email.com>
* 2020
*/

class reservationDao{

    public function add_reservation(ReservationEntity $reservation):void
    {
        $pdo = $this->db_connexion;

        $id = $reservation->id_reservation;
        $dateDeb = $reservation->date_resa_deb;
        $dateFin = $reservation->date_resa_fin;
        $annonces = $reservation->annonces_id;
        $membre = $reservation->membre_id;
        $nb_personnes = $reservation->nb_personnes;

        $query = 
        "INSERT INTO `reservation` (`date_deb`, `date_fin`, `annonces_id`, `membre_id`, `nb_personne`) 
         VALUES ($dateDeb, $dateFin, $annonces, $membre, $nb_personnes)";

    }
}