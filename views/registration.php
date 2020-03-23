<?php

require_once "../views/layout/header.php";

$title = "S'inscrire";
if (!empty($_POST['login']) && !empty($_POST['mdp'])) {
    $email=$_POST['email'];
    $login=$_POST['login'];
    $user=$_POST['user'];
    $mdp = password_hash($_POST['mdp'] , PASSWORD_BCRYPT , ['cost'=>12]);
    $pdo = db_connexion();
    
    
    $query = "INSERT INTO membre (email,login,mdp,solde) VALUES (:email,:login,:mdp,0)";
    
    $stmt= $pdo->prepare($query);
    $stmt->execute([':email'=> $email,':login'=> $login,':mdp'=>$mdp]);
    }
?>

<?php ob_start();?>

 <div style="background-image:url('public/img/inscription/fond.png' );
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;" >
  <div style="background-image:url('public/img/inscription/square.png' );
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;"  >
<div class=" mx-auto text-center w-50  ">
<form method="POST" >
<br/>   
<hr>
  <h1 class="h3 mb-3 font-weight-large  ">INSCRIPTION</h1>
<hr>
 <!-- <img class="mb-4" src="public/img/inscrip.png" alt="" width="457" height="126"> -->
  <br/>
  <br/>
  <label for="inputEmail" class="sr-only">Email</label>
  <input type="text" name="email" id="email" class="form-control" placeholder="Email" required="" autofocus="">
  <br/>
  <br/>
  <label for="inputText" class="sr-only">Login</label>
  <input type="text" name="login" id="Login" class="form-control" placeholder="Login" required="" autofocus="">
  <br/>
  <br/>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Password">
  <br/>
  <br/>
  <td>
        <input type="radio" name="user" id = "user" value="user" />   Devenir Utilisateur 
        <input type="radio" name="user" id = "user" value="membre" />  Devenir Membre
        <br/>
        <br/>
    </td>
    <br/>
  <button class="btn btn-lg btn-primary btn-block btn-green " type="submit">S'inscrire</button>
  <br/>
  <br/>

</form>


<iframe id="wanteeedPanel" data-version="1.7.4" allowtransparency="true" style="
      width: 335px !important;
      height: 250px !important;

      min-width: 0;
      min-height: 0;
      display: none;
      position: fixed;
      top: 10px;
      right: 10px;
      left: auto;
      border: none;
      background-color: #ffffff;
      overflow: hidden;
      z-index: 9145739864;
      clip: auto;
      border-radius: 3px;
      box-shadow: rgb(181, 181, 181) 1px 1px 3px 2px;
    "></iframe></div></div></div>
<pre>
<?php // print_r($_SERVER);?>
</pre>

<?php $content = ob_get_clean();?>

<?php 
require_once "app/layout/footer.php";
require_once ("layout/template.php"); 
require_once "../views/layout/footer.php";
?>
