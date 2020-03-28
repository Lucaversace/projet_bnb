<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Page de profil";
?>
<?php ob_start();?>

<h1>Bonjour</h1>


<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php");
?>