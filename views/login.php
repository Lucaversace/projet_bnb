<?php
use App\Model\MembreEntity;
use App\Service\MembreService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Connexion";

if(isset($_POST['email']) && isset($_POST['password']))
  {   
    $log = new MembreEntity();
    $log->membre_email = $_POST['email'];
    $log->mdp = $_POST['password'];

    $loginService = new MembreService();
    $ligne = $loginService->log_connexion($log);

    if($ligne && password_verify($log->mdp, $ligne['mdp']))
    {   
        session_start();
        $user = new MembreEntity();
        $user->id_membre = $ligne['id'];
        $user->membre_prenom = $ligne['prenom'];
        $user->membre_nom = $ligne['nom'];
        $user->membre_solde = $ligne['solde'];
        $user->membre_email = $ligne['email'];
        $user->mdp = $ligne['mdp'];
        $user->role = $ligne['role'];

        $_SESSION['status'] = 'connected';
        $_SESSION['utilisateur'] = $user;

        redirect('index.php');
    }
    else{$alertForm = true;}
  }
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
    background-image:  url('img/mobile/fond_co.png');
  }
  h1
  {
    font-size: 1.6em;
  }
}
</style>

<div id="content" class=" mx-auto text-center p-5">

  <?php if(isset($alertForm)){?>
    <div class="alert alert-danger">Identifiant ou mot de passe incorrect</div>
  <?php } ?>

  <h1 class="mb-4 font-weight-large text-black mt-5">Se connecter</h1>
  

  <form method="POST" class="container-fluid">

    <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->
    <div class="form-group row mt-5">
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="text" name="email" id="email" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Email" required="" autofocus="">
    </div>

    <div class="form-group row">
      <label for="inputPassword" class="sr-only">Mot de passe</label>
      <input type="password" name="password" id="mdp" class="offset-md-5 col-md-2 form-control mb-4" placeholder="Mot de passe">
    </div>

        <button class="mt-4 btn btn-lg btn-block form-group btn-success col-md-2 text-center mx-auto d-block" type="submit">Connexion</button>
  </form>
</div>



<?php 
$content = ob_get_clean();

require_once "../views/layout/template.php"; 
?>