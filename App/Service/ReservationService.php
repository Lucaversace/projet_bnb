<?php
namespace App\Service;

use App\Dal\reservationDao;
use App\Model\ReservationEntity;

class ReservationService
{
    public function add_reservation(ReservationEntity $reservation)
    {
        $reservationDao = new reservationDao();
        $reservationDao->add_reservation($reservation);
    }

    public function get_reservation(ReservationEntity $reservation)
    {
        $reservationDao = new reservationDao();
        $ligne = $reservationDao->get_reservation($reservation);
        return $ligne;
    }
}