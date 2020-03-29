<?php
ob_start();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="/Accueil"><img id="logo" src="img/logo.png" alt="Logo iBed"></a>
    <img class="d-md-none" id="arrow-menu" src="/img/mobile/arrow.png" alt="" >
    <img class="d-none" id="cross-menu" src="img/mobile/cross.png" alt="">
    <div class="collapse navbar-collapse" id="menu">
        <div class="w-100" id="link-menu">
            <ul class="navbar-nav d-flex justify-content-around mr-auto ml-5 w-75">
                <a class="text-white" href="Accueil">Accueil</a>
                <a class="text-white" href="Depot">Déposer une annonce</a>
                <a class="text-white" href="Connexion">Connexion</a>
                <a class="text-white" href="Inscription">Inscription</a>
                <a class="text-white" href="Aide">Aide</a>
            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean();?>