<?php

require_once "layout/header.php";
require_once "layout/footer.php";
$title = "Aide";
?>

<?php ob_start();?>

<h1>Aide</h1>
<pre>
<?php print_r($_SERVER);?>
</pre>

<?php $content = ob_get_clean();?>

<?php 
require_once("template.php"); 
?>