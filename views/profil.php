<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Page de profil";
?>
<?php ob_start();?>

<style>
main 
{ 
  
  background-image: url('img/desktop/fond.png');
  background-size: cover;
  background-attachment:fixed;
  background-repeat: no-repeat;
} 
@media screen and (max-width: 400px)
{
  main
  {
    background-image:  url('img/mobile/fondinscrim.png');
  }
  h1
  {
    font-size: 1.6em;
  }
}
</style>

<div class=" mx-auto text-center p-5">

  <h1 class="mb-4 font-weight-large text-black ">Modifier mon profil</h1>
  

  <form method="POST" class="container-fluid">

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->

    <div class="form-group row mt-5">
    
    </div>
    <div class="form-group row ">
      <label for="inputEmail" class="text-md-left offset-md-4 col-md-2 mt-1 ">email@Email.fr</label>
      <input type="text" name="email" id="email" class="form-control col-md-2  mb-2 "  placeholder="Nouveau Email" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label for="inputText" class="text-md-left offset-md-4 col-md-2 mt-1"> Mon Nom</label>
      <input type="text" name="nom" id="nom" class="form-control col-md-2 mb-2" placeholder="Nom" required="" >
    </div>

    <div class="form-group row">
      <label for="inputText" class="text-md-left offset-md-4 col-md-2 mt-1">Mon Prénom</label>
      <input type="text" name="prenom" id="prenom" class="form-control col-md-2  mb-2" placeholder="Prénom" required="" >
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="text-md-left offset-md-4 col-md-2 mt-1">Mon Mot de passe</label>
      <input type="password" name="mdp" id="mdp" class="form-control col-md-2  mb-2" placeholder="Mot de passe">
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="text-md-left offset-md-4 col-md-2 mt-1">Solde actuel</label>
      <input type="text" name="solde" id="solde" class="form-control col-md-2  mb-2" placeholder="Ajout solde">
    </div>
        <button class="mt-4 btn btn-lg btn-block form-group btn-primary col-md-2 text-center mx-auto d-block" type="submit">Enregistrer</button>
  </form>
</div>


<?php $content = ob_get_clean();?>

<?php 
require_once "../views/layout/template.php";
?>

