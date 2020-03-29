<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Déposer une annonce";
?>
<?php ob_start();?>

<style>main { 

background-image: url('img/desktop/fond.png');
background-size: cover;
} 

@media screen and (max-width: 670px) {
body{
  background-image:  url('img/mobile/fond.png');

}
h1{
  font-size: 1.2em;
}
}
</style>

<div class=" mx-auto text-center w-50 p-5">

<h1 class=" font-weight-large  mb-4 text-black  mt-5 ">Déposer une annonce</h1>
  

  <form method="POST" >

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->

    <label for="inputEmail" class="sr-only">escription</label>
    <input type="text" name="titre" id="Titre" class="form-control mb-4" placeholder="Titre de l'annonce" required="" autofocus="">

    <div class="form-group">
    <label class="sr-only" for="Desc">Description </label>
    <textarea class="form-control" id="Desc" name="description" rows="3" placeholder="Description"></textarea>
  </div>
  
  <div class="form-group d-flex align-items-center ">
    <label class="w-25" for="nombre">Nombre de lits</label>
    <select class="form-control w-25 ml-4" id="nombre" name="nb_places">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
</div>
    <div class="form-group d-flex align-items-center "> 
    <label class="w-25" for="prix" class="">Prix nuitée par personne</label>
    <input type="text" name="prix" id="prix" class="form-control ml-4 mr-2 w-25" placeholder="Ex : 70 € " required="" > €
</div>

<div class="form-group d-flex align-items-center ">
    <label class="w-25" for="photo">Inserer vos photos</label>
    <input type="file" class="form-control-file ml-4" id="photo" name="url_photo">
  </div>
  <div class="form-group d-flex align-items-center ">
    <label for="inputText" class="w-25">Ville</label>
    <input type="text" name="ville" id="ville" class="form-control ml-4 w-50" placeholder="Ex : Lyon" required="" >
</div>
<div class="form-group d-flex align-items-center ">
    <label for="num_rue" class="w-25">Code postal</label>
    <input type="text" name="num_rue" id="num_rue" class="form-control ml-4 w-50" placeholder="Ex : 69001" required="" >
    </div>
    <div class="form-group d-flex align-items-center ">
    <label for="num_rue" class="w-25">Numéro de rue</label>
    <input type="text" name="num_rue" id="num_rue" class="form-control ml-4 w-50" placeholder="Ex : 7" required="" >
    </div>
    <div class="form-group d-flex align-items-center ">
    <label for="nom_rue" class="w-25">Nom de rue</label>
    <input type="text" name="nom_rue" id="nom_rue" class="form-control ml-4 w-50 " placeholder="Ex : Rue Raoul Servant" required="" >
</div>

    <button class="btn btn-lg btn-block btn-success mb-3 mt-5" type="submit">Déposer l'annonce</button>

  </form>
</div>
<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php");
?>