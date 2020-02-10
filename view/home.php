<?php

require_once "layout/header.php";
require_once "layout/footer.php";
$title = "Accueil";
?>

<?php ob_start();?>

<h1>Accueil</h1>
<pre>
<?php print_r($_SERVER);

echo md5("test", null);?>
</pre>

<?php $content = ob_get_clean();?>

<?php 
require_once("template.php"); 
?>