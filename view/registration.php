<?php

function chargerClasse($classe)
{
  require $classe . '.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

//$perso = new Personnage;

require_once "layout/header.php";
require_once "layout/footer.php";
$title = "S'inscrire";
?>

<?php ob_start();?>

<h1>S'inscrire</h1>
<pre>
<?php print_r($_SERVER);?>
</pre>

<?php $content = ob_get_clean();?>

<?php 
require_once("template.php"); 
?>