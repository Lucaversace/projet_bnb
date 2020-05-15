<?php
use App\Model\AnnonceEntity;
use App\Service\AnnonceService;
use App\Model\MembreEntity;
use App\Service\MembreService;
use App\Model\ReservationEntity;
use App\Service\ReservationService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Annonce";

if (isset($_GET['id'])) 
{
    $id_annonce = $_GET['id'];

    $annonceService  = new AnnonceService();
    $resultAnnonce = $annonceService->get_annonce_by_id($id_annonce);
    $resultsImages = $annonceService->get_all_image_by_id_annonce($id_annonce);
    
    if(empty($resultAnnonce))
    {   
        die();
        header("HTTP/1.0 404 Not Found");
    }
    foreach ($resultsImages as $image) 
    {  
       $tab[] = $image['nom'];
    }
    $image1 = $tab[0];
    $image2 = $tab[1];
    $image3 = $tab[2];

    $annonce = new AnnonceEntity($resultAnnonce);
    $id_membre = $annonce->membre_id;

    $membreService = new MembreService();
    $membreResult = $membreService->get_membre_by_id($id_membre);

    $membre = new MembreEntity($membreResult);

    if(isset($_POST['arrivee']) && !empty($_POST['arrivee']) and isset($_POST['depart']) && !empty($_POST['depart'])
    and isset($_POST['voyageur']) && !empty($_POST['voyageur']))
    {   
        $debSejour = $_POST['arrivee'];
        $finSejour = $_POST['depart'];
        $nb_voyageur = $_POST['voyageur'];

        $dateTimeFormDeb = strtotime($debSejour);
        $dateTimeFormFin = strtotime($finSejour);

        $prix = $resultAnnonce->prix_personne;
        $diffJour = ($dateTimeFormFin - $dateTimeFormDeb) / 86400;
        $prix_total = $prix * $nb_voyageur * $diffJour;

        $reservationService = new ReservationService();
        $reservations = $reservationService->get_all_reservation_by_id($annonce->id_annonce);
        $compteur1 = 0;
        $compteur2 = 0;
        foreach ($reservations as $reservation ) 
        {
            $compteur1 ++;

            $date_deb_resa = $reservation->date_deb;
            $date_fin_resa = $reservation->date_fin;

            $dateTimeDebSql = strtotime($date_deb_resa);
            $dateTimeFinSql = strtotime($date_fin_resa);

            if(($dateTimeFormDeb >= $dateTimeDebSql && $dateTimeFormDeb <= $dateTimeFinSql) || ($dateTimeFormFin >= $dateTimeDebSql && $dateTimeFormFin <= $dateTimeFinSql))
            {
                $errorNoDispo = true;
            }
            else
            {   
                $compteur2++;
            }
        }
        if($compteur1 == $compteur2)
                {
                    if($membre->membre_solde > $prix_total)
                    {   
                        $newSolde = $membre->membre_solde - $prix_total;
                        $membreService->update_solde($id_membre,$newSolde);
                        $resaSucess = true;

                        if($resaSucess)
                        {
                            $reservationInsert = new ReservationEntity();
                            $reservationInsert->date_resa = date('d-m-y h:i:s');
                            $reservationInsert->date_deb = $debSejour;
                            $reservationInsert->date_fin = $finSejour;
                            $reservationInsert->nb_personnes =$nb_voyageur;
                            $reservationInsert->annonces_id = $annonce->id_annonce;
                            $reservationInsert->membre_id = $id_membre;
                            $reservationInsert->prix_total = $prix_total;
                    
                            $stmt = $reservationService->add_reservation($reservationInsert);
                        }
                    else
                        {
                            $errorSolde = true;
                        }
                    }
                }         
    }
    else
    {
        $errorInsert = true;
    }
}

?>

<?php ob_start();?>
<style>
.shadow {
    box-shadow: 1vw 1vw 0.8vw rgba(0,0,0,0.16)!important;
}
h1{color:#8F5EB4;}
</style>
<?php if(isset($errorNoDispo) && $errorNoDispo){?>
    <div class="alert alert-danger">Non disponible veuillez choisir d'autres dates.</div>
<?php } ?>

<?php if(isset($resaSucess) && $resaSucess){?>
    <div class="alert alert-success">Réservation réussie</div>
<?php } ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 border-right border-light">
            <div class="row  d-flex justify-content-center">
                    <div class="p-5">
                    <h1 class=""><?= ucfirst($annonce->titre) ?></h1>
                        <img style="border-radius:1.2vw !important;" class="w-100 shadow" src="upload/<?= $tab[0] ;?>" alt="">
                    </div>
            </div>

            <div class="row d-flex justify-content-around mb-3">

                <div class="col-5">
                    <img style="border-radius:1.2vw !important;" class="w-100 shadow" src="upload/<?= $tab[1] ;?>" alt="">
                </div>

                <div class="col-5">
                    <img style="border-radius:1.2vw !important;" class="w-100 shadow" src="upload/<?= $tab[2] ;?> " alt="">
                </div>
            </div>
        </div>
        <div class="col-md-4 pt-5 mt-5 ">
                <h2>Réservation</h2>
            <div class="p-5 border-top border-black">
                <div class="d-flex justify-content-between ">
                <p><?= $annonce->prix_personne ?> €</p>
                <p>Nuit par Personne</p>
                </div>
                <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">


                <form method="POST">
                    <div class="mt-3">
                            <label class="" for="date">Arrivée  sur les lieux</label>
                            <input type="date" class="col-md-10" id="arrivee" name="arrivee"/>
                            <label class="" for="date">Départ des lieux</label>
                            <input type="date" class="col-md-10" id="depart" name="depart" />
                        </div>
                        <div class="form-group mt-3">
                            <label for="Nmbre_personne">Nombre de personne</label>
                            <select name="voyageur" id="Nmbre_personne" class="form-control">
                                <option selected>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-between mt-3 border-bottom border-black"></div>
                        
                                <button  class="btn btn-success w-100 mb-5 mt-3 <?= $disabled = (empty($_SESSION['status'])) ?  "disabled" : "";?>" <?= $disabled = (empty($_SESSION['status'])) ?  "disabled" : "";?>>Réserver</button>
                                
                </form>
  </div>    
 </div>
</div>
               
                <div class="pb-5 border-bottom border-black">
                    <img class="w-25 " src="img/desktop/profildesktop.png" alt="">
                    <a href="/Membre?id=<?= $annonce->membre_id ?>">Profil de <?php echo ucfirst($membre->membre_prenom); ?> <?php echo strtoupper($membre->membre_nom) ?></a>
                </div>
            </div>
        </div>
    </div>  
</div>

<div class="col-12">
            <h5  class="col-md-2 pb-2 border-bottom border-dark mt-5">Description :</h5>
            <div class="col-md-8 mb-5">
                <p>
                <?= $annonce->description ?>
                </p>
            </div>
        </div>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>