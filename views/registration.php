<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";

$title = "S'inscrire";

ob_start();
?>

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

  <label for="inputEmail" class="sr-only">Email</label>
  <input type="text" name="email" id="email" class="form-control" placeholder="Email" required="" autofocus="">

  <label for="inputText" class="sr-only">Login</label>
  <input type="text" name="login" id="Login" class="form-control" placeholder="Login" required="" autofocus="">

  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="mdp" id="mdp" class="form-control" placeholder="Password">

 
  <td>
        <input type="radio" name="user" id = "user" value="user" />   Devenir Utilisateur 
        <input type="radio" name="user" id = "user" value="membre" />  Devenir Membre
  </td>
  <button class="btn btn-lg btn-primary btn-block btn-green " type="submit">S'inscrire</button>

</form>


<?php $content = ob_get_clean();?>

<?php 
require_once "../views/layout/template.php";
?>
