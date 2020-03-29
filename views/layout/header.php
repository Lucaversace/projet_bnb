<?php
ob_start();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="/Accueil"><img id="logo" src="img/logo.png" alt="Logo iBed"></a>
    <input id="mob-ham" class="d-sm-none" type="image" src="img/mobile/hamburger.png" onclick="tafonctionJavascript()">
    <input id="mob-cross" class="d-none" type="image" src="img/mobile/cross.png" onclick="tafonctionJavascript()">
    <div class="collapse navbar-collapse" id="menu">
        <div class="w-100">
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