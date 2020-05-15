<?php
use App\Model\MembreEntity;
use App\Service\MembreService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Changez de mot de passe";

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['newpasswd']) && !empty($_POST['newpasswd']) && isset($_POST['confirmpasswd']) && !empty($_POST['confirmpasswd']))
{
    $membreService = new MembreService();
    $user = $_POST['user'];
    $newpasswd =  $_POST['newpasswd'];
    $confirm = $_POST['confirmpasswd'];

    $exist_user = $membreService-> exist_user($user);

    if($newpasswd == $confirm && $exist_user == true)
    {
        $hash = password_hash($newpasswd, PASSWORD_BCRYPT, ['cost' => 12]);
        $membreService->update_passwd($user, $hash);
    }
    else{
        $error_invalid = true;
    }
}
elseif(isset($_POST['user']) && empty($_POST['user']) && isset($_POST['newpasswd']) && empty($_POST['newpasswd']) && isset($_POST['confirmpasswd']) && empty($_POST['confirmpasswd'])){
    $error_empty = true;
}
?>

<?php ob_start();?>

<style>

</style>

<?php if(isset($error_empty) && $error_empty){?>
<div class="alert alert-danger">Tous les champs sont obligatoires.</div>
<?php }?>
<?php if(isset($error_invalid) && $error_invalid){?>
<div class="alert alert-danger">Les champs sont invalides.</div>
<?php }?>

<h1>Changer votre mot de passe</h1>


</figure>

<form id="form-forget" method="POST">
<label for="">Votre adresse mail</label>
<input name="user" type="text">
<label for="">Nouveau mot de passe</label>
<input name="newpasswd" type="password">
<label for="">Confirmer le mot de passe</label>
<input name="confirmpasswd" type="password">

<button class="btn btn-primary">Changer mot de passe</button>
</form>

<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php"); 
?>