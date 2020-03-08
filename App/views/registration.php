<?php

require_once "app/layout/header.php";
require_once "app/layout/footer.php";
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