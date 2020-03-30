<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Connexion";
?>

<?php ob_start();?>

<style>
main 
{ 
  
  background-image: url('img/desktop/fondinscri.png');
  background-size: cover;
  background-attachment:fixed;
  background-repeat: no-repeat;
} 
@media screen and (max-width: 400px)
{
  main
  {
    background-image:  url('img/mobile/fondconnectm.png');
    background-size: 100% 100%;
    background-repeat: no-repeat;
  }
  h1
  {
    font-size: 1.6em;
  }
}
</style>

<div class=" mx-auto text-center p-5">

  <h1 class="mb-4 font-weight-large text-black ">Se connecter</h1>
  

  <form method="POST" class="container-fluid">

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->
    <div class="form-group row mt-5">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="text" name="email" id="email" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Email" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="mdp" id="mdp" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Mot de passe">
    </div>

        <button class="mt-4 btn btn-lg btn-block form-group btn-success col-md-2 text-center mx-auto d-block" type="submit">Connexion</button>
  </form>
</div>



<?php $content = ob_get_clean();?>


<?php require_once "../views/layout/template.php";