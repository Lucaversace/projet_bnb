<?php
use App\Model\MembreEntity;
use App\Service\MembreService;

if(isset($_POST['email']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mdp']) && isset($_POST['user']))
{
  echo "ça marche";
  $membre = new MembreEntity();
  $membre->membre_prenom = $_POST['prenom'];
  $membre->membre_nom = $_POST['nom'];
  $membre->membre_email = $_POST['email'];
  $membre->mdp = $_POST['mdp'];
  $membre->role = $_POST['user'];

  $membreService = new MembreService();
  $membreService->add_membre($membre);
}
else
{
  $alertForm = true; 
}

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";

$title = "S'inscrire";

ob_start();
?>

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

<?php if($alertForm){?> 
  <div class="alert alert-danger">
    Échec de l'envoi du formulaire veuillez remplir tous les champs.
</div>
<?php }?>

  <h1 class="mb-4 font-weight-large text-black ">Inscription</h1>
  
  <form method="POST" class="container-fluid">

    <div class="form-group row mt-5">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="text" name="email" id="email" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Email" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label for="inputText" class="sr-only">Nom</label>
      <input type="text" name="nom" id="nom" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Nom" required="" >
    </div>

    <div class="form-group row">
      <label for="inputText" class="sr-only">Prénom</label>
      <input type="text" name="prenom" id="prenom" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Prénom" required="" >
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="mdp" id="mdp" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Mot de passe">
    </div>

    <div class="form-group d-flex flex-column ">
      <div>
        <label for="inpuusertPassword" class="">Devenir utilisateur</label>
        <input type="radio" name="user" id="user" value="user" />
      </div>
      <div>
        <label for="user" class="">Devenir membre</label>
        <input type="radio" name="user" id="user" value="membre" />
      </div>
      
        <button class="mt-4 btn btn-lg btn-block form-group btn-success col-md-2 text-center mx-auto d-block" type="submit">S'inscrire</button>
  </form>
</div>
<small>* Devenir membre vous permettra de déposer une annonce d'hébergement</small>

<?php $content = ob_get_clean();
require_once "../views/layout/template.php"; 
?>
