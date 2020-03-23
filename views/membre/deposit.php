<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Déposer une annonce";
?>
<?php ob_start();?>

<h1>Déposer une annonce</h1>

<img src="public/img/depot_annonce/fond_page_annonce.png" style="width:100vw;" alt="">

<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php");
?>