<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Déposer une annonce";
?>
<?php ob_start();?>

<style>
main 
{ 
  background-image: url('img/desktop/fond.png');
  background-size: cover;
  background-repeat: repeat;
} 

@media screen and (max-width: 670px) 
{
  body
  {
    background-image:  url('img/mobile/fond.png');
    background-size: 10%;
    background-repeat: no-repeat;

  }
  h1
  {
    font-size: 1.6em;
  }
}
</style>

<div class=" mx-auto text-center w-50 p-5">

  <h1 class="font-weight-large text-black">Déposer une annonce</h1>
  

  <form method="POST" class="container-fluid">

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->
    <div class="form-group row mt-5">
      <label for="inputEmail" class="sr-only">Description</label>
      <input type="text" name="titre" id="Titre" class="form-control col-md-3" placeholder="Titre de l'annonce" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label class="sr-only" for="Desc">Description </label>
      <textarea class="form-control  mb-4" id="Desc" name="description" rows="3" placeholder="Description"></textarea>
    </div>
  
    <div class="form-group row d-flex align-items-center ">
      <label class="col-md-4" for="nombre">Nombre de lits</label>
      <select class="form-control offset-md-2 col-md-2" id="nombre" name="nb_places">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
      </select>
    </div>
    <div class="input-group row">
      <label class="col-md-4"  for="nombre">Prix de la nuitée/Personne</label>
      <input type="text" class="form-control offset-md-2 col-md-2" placeholder="Ex : 79€">
      <div class="input-group-append mb-3">
        <span class="input-group-text">€</span>
      </div>
    </div>

    <div class="form-group row d-flex align-items-center ">
      <label class="col-md-4" for="inputText">Ville</label>
      <input type="text" name="ville" id="ville" class="form-control offset-md-2 col-md-3" placeholder="Ex : Lyon" required="" >
    </div>

    <div class="form-group row d-flex align-items-center ">
      <label class="col-md-4" for="num_rue">Code postal</label>
      <input type="text" name="num_rue" id="num_rue" class="form-control offset-md-2 col-md-3" placeholder="Ex : 69001" required="" >
    </div>

    <div class="form-group row d-flex align-items-center ">
      <label class="col-md-4" for="num_rue">Numéro de rue</label>
      <input type="text" name="num_rue" id="num_rue" class="form-control offset-md-2 col-md-3" placeholder="Ex : 7" required="" >
    </div>

    <div class="form-group row d-flex align-items-center ">
      <label class="col-md-4" for="nom_rue">Nom de rue</label>
      <input type="text" name="nom_rue" id="nom_rue" class="form-control offset-md-2 col-md-5 mb-4" placeholder="Ex : Rue Raoul Servant" required="" >
    </div>

    <div class="form-group input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroupFileAddon01">Choisir vos photos</span>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
        <label class="custom-file-label" for="inputGroupFile01">aucun fichier sél.</label>
      </div>
    </div>
    <button class="mt-4 btn btn-lg btn-block form-group btn-success col-md-3 text-center mx-auto d-block" type="submit">Déposer l'annonce</button>

  </form>
</div>
<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php");
?>