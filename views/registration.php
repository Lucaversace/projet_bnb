<?php
use App\Model\MembreEntity;
use App\Service\MembreService;

if(!empty($_POST['email']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mdp']) && !empty($_POST['role']))
{
  $membre = new MembreEntity();
  $membre->membre_prenom = $_POST['prenom'];
  $membre->membre_nom = $_POST['nom'];
  $membre->membre_email = $_POST['email'];
  $membre->mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT, ['cost' => 12]);
  $membre->role = $_POST['role'];

  $membreService = new MembreService();
  $membreService->add_membre($membre);

  $alertFormGreen = true;
}
elseif(isset($_POST['email']) and $_POST['email'] == "" || isset($_POST['nom']) and $_POST['nom'] == "" || isset($_POST['prenom']) and $_POST['prenom'] == "" || isset($_POST['mdp']) and $_POST['mdp'] == "" || !isset($_POST['role']))
{
  $alertFormRed = true; 
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

<?php if(isset($alertFormRed)){?> 
  <div class="alert alert-danger">
    Échec de l'envoi du formulaire veuillez remplir tous les champs.
</div>
<?php }
elseif(isset($alertFormGreen)){?>
  <div class="alert alert-success">
    Votre inscription a été validée avec succès.
</div>
<?php }?>


  <h1 class="mb-4 font-weight-large text-black ">Inscription</h1>
  
  <form method="POST" class="container-fluid">

    <div class="form-group row mt-5">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="text" name="email" id="email" class="offset-md-4 col-md-4 form-control mb-4" placeholder="Email" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label for="inputText" class="sr-only">Nom</label>
      <input type="text" name="nom" id="nom" class="offset-md-4 col-md-4 form-control mb-4" placeholder="Nom" required="" >
    </div>

    <div class="form-group row">
      <label for="inputText" class="sr-only">Prénom</label>
      <input type="text" name="prenom" id="prenom" class="offset-md-4 col-md-4 form-control mb-4" placeholder="Prénom" required="" >
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="mdp" id="mdp" class="offset-md-4 col-md-4 form-control mb-4" placeholder="Mot de passe">
    </div>

    <div class="form-group d-flex flex-column ">
      <div>
        <label for="inpuusertPassword" class="">Devenir utilisateur</label>
        <input type="radio" name="role" id="user" value="user" />
      </div>
      <div>
        <label for="user" class="">Devenir membre</label>
        <input type="radio" name="role" id="user" value="membre" />
      </div>
      
        <button class="mt-4 btn btn-lg btn-block form-group btn-success col-md-2 text-center mx-auto d-block" type="submit">S'inscrire</button>
  </form>
</div>
<small class="text-muted">* Devenir membre vous permettra de déposer une annonce d'hébergement et un profil que les utilisateurs pourront consulter</small>

<?php $content = ob_get_clean();
require_once "../views/layout/template.php"; 
?>
