<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "membre";
?>

<?php ob_start();?>

<h1>Aide</h1>


<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>