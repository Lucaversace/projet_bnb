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
#fondimg{
z-index: 1;
}
#formpasswd{
z-index: 2;
position:absolute;
top:12vw;
background-color: white;
display: flex;
flex-direction: column;
border-radius: 0.8vw;
left: 30%;
}
#fondimg img{
    width: 100%;
    height: 800px;
}

</style>
<div id="fondimg"> 
<img src="img/desktop/fondinscri.png" alt="">
</div>
<?php if(isset($error_empty) && $error_empty){?>
<div class="alert alert-danger">Tous les champs sont obligatoires.</div>
<?php }?>
<?php if(isset($error_invalid) && $error_invalid){?>
<div class="alert alert-danger">Les champs sont invalides.</div>
<?php }?>


<div class="p-5 " id="formpasswd">
<h1>Changer votre mot de passe</h1>


<form class="d-flex flex-column p-5" id="form-forget" method="POST">
<label for="">Votre adresse mail</label>
<input name="user" type="text">
<label for="">Nouveau mot de passe</label>
<input name="newpasswd" type="password">
<label for="">Confirmer le mot de passe</label>
<input name="confirmpasswd" type="password">
</br>
<button class="btn btn-primary">Changer mot de passe</button>
</form>
</div>
<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php"); 
?>