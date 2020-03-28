<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
use App\Model\MembreEntity;
use App\Service\MembreService;
$title = "S'inscrire";

if(isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['user']) )
{
  $membre = new MembreEntity();
  $membre->membre_prenom = $_POST['prenom'];
  $membre->membre_nom = $_POST['nom'];
  $membre->membre_email = $_POST['email'];
  $membre->mdp = $_POST['mdp'];
  $membre->role = $_POST['user'];

  $membreService = new MembreService();
  $membreService->add_membre($membre);
  
}
ob_start();
?>
<style>body { 

background-image: url('img/inscription/fond.png');
height: 100vh;

background-repeat: no-repeat;
background-size: cover;} 
@media screen and (max-width: 670px) {
body{
  background-image:  url('img/inscription/fond_insc.png');

}
h1{
  font-size: 1.2em;
}
}
</style>

<div class=" mx-auto text-center w-50 ">

<h1 class=" font-weight-large  mb-4 text-black  mt-5 ">INSCRIPTION</h1>
  

  <form method="POST" >

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->

    <label for="inputEmail" class="sr-only">Email</label>
    <input type="text" name="email" id="email" class="form-control mb-4" placeholder="Email" required="" autofocus="">

    <label for="inputText" class="sr-only">Nom</label>
    <input type="text" name="nom" id="nom" class="form-control mb-4" placeholder="Nom" required="" >

    <label for="inputText" class="sr-only">Prénom</label>
    <input type="text" name="prenom" id="prenom" class="form-control mb-4" placeholder="Prénom" required="" >

    <label for="inputPassword" class="sr-only">Mot de passe</label>
    <input type="password" name="mdp" id="mdp" class="form-control mb-4" placeholder="Mot de passe">

    <div class="mt-2 d-flex flex-column ">
      <div>
        <label for="inpuusertPassword" class="">Devenir utilisateur</label>
        <input type="radio" name="user" id="user" value="user" />
      </div>
      <div>
        <label for="user" class="">Devenir membre</label>
        <input type="radio" name="user" id="user" value="membre" />
      </div>
    </div>
    <button class="btn btn-lg btn-block btn-success" type="submit">S'inscrire</button>

  </form>
</div>

<?php $content = ob_get_clean();?>

<?php 
require_once "../views/layout/template.php";
?>
