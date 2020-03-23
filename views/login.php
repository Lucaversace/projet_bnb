<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Connexion";
?>

<?php ob_start();?>

<h1>Se connecter</h1>


<?php $content = ob_get_clean();?>


<?php require_once "../views/layout/template.php";