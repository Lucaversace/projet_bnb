<?php
namespace App\Dal;
use App\Model\ReservationEntity;
use PDO;
/*
* reservationDao.php
* reservationDao
* @author lBV <email@email.com>
* 2020
*/

class reservationDao extends AbstractDao
{
    public function add_reservation(ReservationEntity $reservation)
    {
        $pdo = $this->pdo;

        $dateResa = $reservation->date_resa;
        $dateDeb = $reservation->date_deb;
        $dateFin = $reservation->date_fin;
        $annonce = $reservation->annonces_id;
        $membre = $reservation->membre_id;
        $nb_personnes = $reservation->nb_personnes;
        $prix_total = $reservation->prix_total;

        $query = 
        "INSERT INTO reservation (date_reservation, date_deb, date_fin, nb_personne, prix_total, annonces_id, membre_id ) 
        VALUES (:dateResa, :dateDeb, :dateFin, :nb_personnes, :prix_total, :annonce, :membre )";

        $stmt =  $pdo->prepare($query);
        $stmt->execute([
        ':dateResa' => $dateResa, 
        ':dateDeb' => $dateDeb, 
        ':dateFin' => $dateFin, 
        ':annonce' => $annonce, 
        ':membre' => $membre, 
        ':nb_personnes' => $nb_personnes,
        ':prix_total' => $prix_total]);

        return $stmt;
    }
    public function get_all_reservation_by_id($id_annonce):array
    {   
        $pdo = $this->pdo;
        $query = "SELECT * FROM reservation WHERE annonces_id = :id_annonce";

        $stmt = $pdo->prepare($query);
        $stmt->execute([':id_annonce' => $id_annonce]);
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $results;
    }

    public function get_reservation(ReservationEntity $reservation)
    {

    }

    public function delete_reservation(ReservationEntity $reservation):void
    {

    }


}