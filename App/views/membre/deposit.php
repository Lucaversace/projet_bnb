<?php
require_once "app/layout/header.php";
require_once "app/layout/footer.php";
$title = "Déposer une annonce";
?>
<?php ob_start();?>

<h1>Déposer une annonce</h1>
<pre>
<?php print_r($_SERVER);?>
</pre>

<?php $content = ob_get_clean();?>

<?php 
require_once("app/views/template.php");
?>