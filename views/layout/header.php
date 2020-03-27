<?php
ob_start();
?>

<nav class="navbar navbar-expand-md navbar-dark">
    <a href="../home.php"><img id="logo" src="/img/logo.png" alt="Logo iBed"></a>
    <img id="arrow-menu" src="/img/arrow.png" alt="">
    <img id="cross-menu" src="img/cross.png" alt="">
    <div class="collapse navbar-collapse" id="menu">
        <div class="w-100" id="link-menu">
            <ul class="navbar-nav d-flex mr-auto ml-5 w-75">
                <a href="Accueil">Accueil</a>
                <a href="Depot">Déposer une annonce</a>
                <a href="Connexion">Connexion</a>
                <a href="Inscription">Inscription</a>
                <a href="Aide">Aide</a>
            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean();?>