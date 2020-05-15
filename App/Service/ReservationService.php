<?php
namespace App\Service;

use App\Dal\reservationDao;
use App\Model\ReservationEntity;

class ReservationService
{
    public function add_reservation(ReservationEntity $reservation)
    {
        $reservationDao = new reservationDao();
        $stmt = $reservationDao->add_reservation($reservation);
        return $stmt;

    }

    public function get_reservation(ReservationEntity $reservation)
    {
        $reservationDao = new reservationDao();
        $ligne = $reservationDao->get_reservation($reservation);
        return $ligne;
    }
    public function get_all_reservation_by_id($id_annonce)
    {
        $annonceDao = new ReservationDao();
        $results = $annonceDao->get_all_reservation_by_id($id_annonce);
        return $results;
    }
}