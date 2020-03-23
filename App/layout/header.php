<?php
require_once dirname(__DIR__). DIRECTORY_SEPARATOR . "functions.php";
use function \Feat\nav_item;

$class = '';

ob_start();
?>
<nav class="navbar navbar-expand-md navbar-dark">
    <a href="index.php?action=home"><img id="logo" src="public/img/logo.png" alt="Logo iBed"></a>
    <img id="arrow-menu" src="public/img/arrow.png" alt="">
    <img id="cross-menu" src="public/img/cross.png" alt="">
    <div class="collapse navbar-collapse" id="menu">
        <div class="w-100" id="link-menu">
            <ul class="navbar-nav mr-auto ml-5 w-75">
                <?= nav_item("action=home", "Accueil", $class);?>
                <?= nav_item("action=deposit", "Déposer une annonce", $class);?>
                <?= nav_item("action=registration", "Inscription", $class);?>
                <?= nav_item("action=login", "Connexion", $class);?>
                <?= nav_item("action=help", "Aide", $class);?>
            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean();?>