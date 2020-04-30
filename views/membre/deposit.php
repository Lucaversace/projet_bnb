<?php
use App\Model\annonceEntity;
use App\Service\annonceService;


require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Déposer une annonce";


if(isset($_POST['titre']) and isset($_POST['description'])  and isset($_POST['prix']) and isset($_POST['nb_places'])
 and isset($_POST['ville']) and isset($_POST['code_postale']) /*and isset($_POST['upload'])*/
  and isset($_POST['num_rue']) and isset($_POST['nom_rue']))
{   

  $annonce = new annonceEntity();
  $annonce->titre = $_POST['titre'];
  $annonce->descrip = $_POST['description'];
  $annonce->prix_pers = $_POST['prix'];
  $annonce->places = $_POST['nb_places'];
  $annonce->membre_id = $_SESSION['utilisateur']->id_membre;
  $annonce->ville = $_POST['ville'];
  $annonce->code_postale = $_POST['code_postale'];
  $annonce->num_rue = $_POST['num_rue'];
  $annonce->nom_rue = $_POST['nom_rue'];
  $annonce->url_img = null;

  $annonceService = new annonceService();
  $stmt = $annonceService->add_annonce($annonce);
}

?>
<?php ob_start();?>

<style>
main 
{ 
  background-image: url('img/desktop/fond.png');
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
} 

@media screen and (max-width: 670px) 
{
  main
  {
    background-image:  url('img/mobile/fond_co.png');
  }
  h1
  {
    font-size: 1.6em;
  }
}
</style>

<div class=" mx-auto text-center p-5">

  <h1 class="font-weight-large text-black">Déposer une annonce</h1>
  

  <form method="POST" class="container-fluid" enctype="multipart/form-data">

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->
    <div class="form-group row mt-5">
      <label for="inputEmail" class="sr-only">Titre</label>
      <input type="text" name="titre" id="Titre" class="form-control offset-md-2 col-md-3" placeholder="Titre de l'annonce" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label class="sr-only" for="Desc">Description </label>
      <textarea class="form-control offset-md-2 col-md-6 mb-4" id="Desc" name="description" rows="3" placeholder="Description"></textarea>
    </div>
  
    <div class="form-group row">
      <label class="col-form-label offset-md-2 col-md-2" for="nombre">Nombre de lits</label>
      <select class="form-control offset-md-1 col-md-3" id="nombre" name="nb_places">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    

    <div class="form-group row">
      <div class="offset-md-2 col-md-2">
          <label class="col-form-label"  for="nombre">Prix de la nuitée/Personne</label>
      </div>
      <div class="offset-md-1 col-md-3 d-flex align-items-center">
        <div class="input-group">
        <input type="text" class="form-control" name="prix" placeholder="Ex : 79€">
          <div class="input-group-append">
          
              <span class="input-group-text">€</span>
          </div>
          
          
        </div>
      </div>
    </div>

    <div class="form-group row  text-center">
      <label class="col-form-label offset-md-2 col-md-2" for="inputText">Ville</label>
      <input type="text" name="ville" id="ville" class="form-control offset-md-1 col-md-3" placeholder="Ex : Lyon" required="" >
    </div>

    <div class="form-group row ">
      <label class="col-form-label offset-md-2 col-md-2" for="num_rue">Code postale</label>
      <input type="text" name="code_postale" id="num_rue" class="form-control offset-md-1 col-md-3" placeholder="Ex : 69001" required="" >
    </div>

    <div class="form-group row ">
      <label class="col-form-label offset-md-2 col-md-2" for="num_rue">Numéro de rue</label>
      <input type="text" name="num_rue" id="num_rue" class="form-control offset-md-1 col-md-3" placeholder="Ex : 7" required="" >
    </div>

    <div class="form-group row ">
      <label class="col-form-label offset-md-2 col-md-2" for="nom_rue">Nom de rue</label>
      <input type="text" name="nom_rue" id="nom_rue" class="form-control offset-md-1 col-md-3" placeholder="Ex : Rue Raoul Servant" required="" >
    </div>

    <div class="form-group row">
    <label for="images"  class="col-form-label col-md-2 offset-md-2">Choisir vos photos</label>
    <input type="file" class="form-control-file offset-md-1 col-md-3" name="upload" id="images" >
  </div>
    <button class="mt-4 btn btn-lg btn-block form-group btn-success col-md-3 text-center  mx-auto d-block" type="submit">Déposer l'annonce</button>

  </form>
</div>
<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php");
?>