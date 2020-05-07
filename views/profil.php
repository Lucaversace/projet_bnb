<?php
use App\Model\MembreEntity;
use App\Service\MembreService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Page de profil";


$mdp = (isset($_POST['mdp']) && !empty($_POST['mdp'])) ? $_POST['mdp'] : $_SESSION['utilisateur']->mdp;
$email = (isset($_POST['email']) && !empty($_POST['email'])) ? $_POST['email'] : $_SESSION['utilisateur']->membre_email;
$solde = (isset($_POST['solde']) && !empty($_POST['solde'])) ? $_POST['solde'] : $_SESSION['utilisateur']->membre_solde;

if(isset($_POST['email']))
{
  $id  = $_SESSION['utilisateur']->id_membre;
  $membreServcie = new MembreService();
  $stmt = $membreServcie->update_user($id,$email,$mdp,$solde);

  if($stmt)
  {
    $_SESSION['utilisateur']->membre_solde = $solde;
    $_SESSION['utilisateur']->mdp = $mdp;
    $_SESSION['utilisateur']->membre_email = $email;
  }
}

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
#inform
{
  background-color: white;
  border-radius: 0.6vw;
}
#modif
{
  background-color: white;
  border-radius: 0.6vw;
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

<h1 class="mb-4 font-weight-large text-black  d-none">Mon profil</h1>
  
<div  class="p-5 container-fluid row">
    <div id="inform" class="m-2 p-3 col-md-4">
      <h2 class="mb-5 text-center">Mes informations personelles</h2>
      <div>
          <label for="">Email : <?php echo  $_SESSION['utilisateur']->membre_email ?></label>
      </div>
      <div>
          <label for="">Nom : <?php echo  $_SESSION['utilisateur']->membre_nom ?></label>
      </div>
      <div> 
          <label for="">Prenom : <?php echo  $_SESSION['utilisateur']->membre_prenom ?></label>
      </div>
          <label for="">Solde : <?php echo  $_SESSION['utilisateur']->membre_solde ?> €</label>
    </div>

    <div id="modif" class="p-3 container col-md-6">
      <h2 class="mb-5 text-center">Modifier mes informations</h2>

      <form method="POST">

          <div class="form-group row ">
            <label for="inputEmail" class=" col-md-4 mt-1 ">Adresse  mail :</label>
            <input type="text" name="email" id="email" class="form-control col-md-4  mb-1 "  placeholder="Changez d'adresse mail">
          </div>

          <div class="form-group row">
            <label for="inputPassword" class=" col-md-4 mt-1">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" class="form-control col-md-4  mb-1" placeholder="Nouveau mot de passe">
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-md-4 mt-1">Modifier  Solde :</label>
            <input type="text" name="solde" id="solde" class="form-control col-md-4 mb-1" placeholder="Entrez la solde ">
          </div>

              <button class="mt-4 btn btn-lg btn-block form-group btn-primary col-md-3 text-center mx-auto d-block" type="submit">Enregistrer</button>
      </form>

    </div>
</div>


<?php $content = ob_get_clean();?>

<?php 
require_once "../views/layout/template.php";
?>

