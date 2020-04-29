<?php
namespace App\Dal;
use App\Model\ReservationEntity;
/*
* reservationDao.php
* reservationDao
* @author lBV <email@email.com>
* 2020
*/

class reservationDao extends AbstractDao
{
    public function add_reservation(ReservationEntity $reservation):void
    {
        $pdo = $this->pdo;

        $dateResa = $reservation->dateResa;
        $dateDeb = $reservation->date_resa_deb;
        $dateFin = $reservation->date_resa_fin;
        $annonce = $reservation->annonces_id;
        $membre = $reservation->membre_id;
        $nb_personnes = $reservation->nb_personnes;

        $query = 
        "INSERT INTO reservation (date_deb, date_fin, annonces_id, membre_id, nb_personne) 
        VALUES (:dateDeb, :dateFin, :annonce, :membre, :nb_personnes)";

        $stmt =  $pdo->prepare($query);
        $stmt->execute([':dateResa' => $dateResa, ':dateDeb' => $dateDeb, ':dateFin' => $dateFin, ':annonce' => $annonce, ':membre' => $membre, 'nb_personnes' => $nb_personnes]);
    }

    public function get_reservation(ReservationEntity $reservation)
    {

    }

    public function delete_reservation(ReservationEntity $reservation):void
    {

    }

    public function update_reservation(ReservationEntity $reservation):void
    {

    }
}