<?php

use App\Model\AnnonceEntity;
use App\Service\annonceService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";

$title = "Recherche";

if (isset($_GET['lieu']) and isset($_GET['voyageur'])) 
{
    $lieu = $_GET['lieu'];
    $voyageur = $_GET['voyageur'];

    $annonceService = new annonceService();
    $results = $annonceService->get_search_annonce($voyageur, $lieu);
    if ($results == null) 
    {
      $oups = true;
    }
}
?>

<?php ob_start();?>
<style>
    img {
      border-radius: 1vw;  
      width: 100%;
    }
    .annonce:hover{
      background-color: #F5F5F5;
    }
    #annonce{
      color:black !important;
      text-decoration: none !important;
    }
</style>

<?php if(!isset($oups)){?>
<h1 class="h1search  mt-5 ml-3 ">
  Résultat<?php pluriels($results);?> pour <?= $voyageur?> voyageur<?php pluriels($voyageur)?> et <?= $lieu ?> pour destination
</h1>
<?php  }
else{?>
<h1>Oups, aucun résultat ne correspond à votre recherche  !</h1>
<?php } ?>

<?php foreach($results as $annonceSql){
  $annonce = new AnnonceEntity($annonceSql);
  ?>
<a  id="annonce" href="Annonce?id=<?= $annonce->id_annonce?>">
<div class="container-fluid annonce">
  <div  class="row mb-3 mt-5 ml-1 d-flex align-items-center " > 
          <div class="col-sm-3 mb-5 mt-5 ">
            <img src="img/desktop/annonce/ori4.png" alt=""> 
        </div> 
        <div class="col-sm-3  mr-sm-2 ">
            <h3  class=""><?php echo($annonce->titre);?></h3>
            <h5  class="mt-md-5 mt-sm-0">Place<?php pluriels($annonce->nb_places); ?>  : <?php echo($annonce->nb_places);?></h5>
            <h5  class="mt-md-5 mt-sm-0">Prix de la nuit/Personne :  <?php echo($annonce->prix_personne);?> €</h5>
        </div>
        <div class="d-none d-md-block col-sm-5 mb-4 ">
            <h5  class="">Description :</h5>
            <h8 class="">
            <?php echo($annonce->description);?>
            </h8>
        </div>
</div>
</div>
</a>
<?php } ?>
<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>