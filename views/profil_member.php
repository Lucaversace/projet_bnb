<?php

use App\Model\AnnonceEntity;
use App\Service\AnnonceService;
use App\Model\MembreEntity;
use App\Service\MembreService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";


if (isset($_GET['id'])) 
{
	$id_membre = $_GET['id'];

	$membreService = new MembreService();
	$membreResult = $membreService->get_membre_by_id($id_membre);
	$membre = new MembreEntity($membreResult);

	$annonceService  = new AnnonceService();
	$resultsAnnonce = $annonceService->get_annonce_by_id_membre($id_membre);
}
$title = "Profil de " . $membre->membre_prenom;
?>

<?php ob_start();?>

<div class="container-fluid">
    <div class="row Membre">
		<div class="col-md-3">
			<div class="Membre-menu d-flex flex-column justify-content-center">
				<!-- MENU -->
				<div class="Membre-img d-flex justify-content-center">
					<img src="img/desktop/profildesktop.png" id="img-profil" class="img-responsive" alt="">
				</div>
				<!-- FIN MENU-->
				<!-- TITRE -->
				<div class="Membre-titre">
					<div class="Membre-titre-nom">
					<?php echo ucfirst($membre->membre_prenom); ?> <?php echo ucfirst($membre->membre_nom) ?>
					</div>
					<div class="Membre-titre-pays">
						France
					</div>
				</div>
				<!-- FIN TITRE -->
				<!-- BOUTONS -->
				<div class="Membre-boutons  d-flex flex-column justify-content-center ">
					<div>
					<button type="button" class="btn btn-primary btn-sm w-50  disabled">Telephone</button>
					</div>
					<div>
					<button type="button" class="btn btn-primary btn-sm w-50 disabled"> Email </button>
					</div>	
				</div>

				<!-- CENTRE -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="Membre-centre">
			   <h2>Bonjour, je m'appelle <?= ucfirst($membre->membre_prenom) ?></h2>
			   <p> Membre depuis 2020 </p>
			   <p> Habite à Lyon, France </p>
			   <hr></hr>
			   <h6> Annonce<?php pluriels($resultsAnnonce);?> de <?= ucfirst($membre->membre_prenom) ?> : <h6>
			   <div class="Membre-img d-flex justify-content-around flex-wrap">
				   <?php foreach ($resultsAnnonce as $annonce) 
				   {
					   $resultsImage = $annonceService->get_first_image_by_id_annonce($annonce->id);
					   $tab = array();
					   foreach ($resultsImage as $image) 
					   	{
							$tab= array();
							$tab[] = $image['nom'];
						}?>
						
						<div class="annonce p-3 col-4 mt-3">
						<a href="/Annonce?id=<?= $annonce->id ?>"><img src="/upload/<?= $tab[0] ?>" class="img-responsive img-annonce" alt=""></a>
						<div ><?= $annonce->titre ?></div>
						<?php if ($id_membre == $_SESSION['utilisateur']->id_membre){?>
						<a href="/Supprimer?id=<?= $annonce->id ?>&idmembre=<?= $id_membre ?>">Supprimer</a>
						<?php } ?>
						</div>
						
				<?php }?>
				</div>
				
			   </div>
            </div>
		</div>
	</div>
</div>

<style>

body {
  background: #F1F3FA;
}
.annonce:hover
{
	background-color: #F5F5F5;
	border-radius: 2vw;
}
.Membre {
  margin: 20px 0;
}

.Membre-menu {
	border-radius: 0.6vw;
  padding: 20px 0 10px 0;
  background: #fff;
  box-shadow: 5px 5px 5px rgba(0,0,0,0.4);
}

.img-annonce{
  margin: 0 auto;
width: 100%;
}
#img-profil{
	width: 50%;
	height: 50%;
}

.Membre-titre {
  text-align: center;
  margin-top: 20px;
}

.Membre-titre-nom {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.Membre-titre-pays {
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.Membre-boutons {
  text-align: center;
  margin-top: 10px;
}

.Membre-boutons .btn {
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
  margin-top: 0.2vw;
}   
img{
	border-radius: 0.6vw;
}
/* CENTRE */
.Membre-centre {
  padding: 30px;
  background: #fff;
  min-height: 460px;
  border-radius: 0.6vw;
}
 </style>



<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>