<?php
$sep = DIRECTORY_SEPARATOR;
require_once dirname(__DIR__). DIRECTORY_SEPARATOR . "App/functions.php";
use function \Feat\nav_item;

$class = '';

ob_start();
?>
<nav class="navbar navbar-expand-md navbar-dark bg-light">
    <img src="public/img/logo.png" alt="Logo iBed">
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            <?= nav_item("action=home", "Accueil", $class);?>
            <?= nav_item("action=deposit", "Déposer une annonce", $class);?>
            <?= nav_item("action=registration", "Inscription", $class);?> 
            <?= nav_item("action=help", "Aide", $class);?>
        
        </ul>
    </div>
</nav>

<?php $header = ob_get_clean();?>