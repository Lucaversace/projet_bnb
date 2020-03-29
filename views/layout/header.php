<?php
ob_start();
?>

<nav class="navbar navbar-default bg-dark navbar-expand-lg" role="navigation">
    
    <div class="container-fluid">

        <a class="navbar-brand navbar-left" href="/Accueil"><img id="logo" src="img/logo.png" alt="Logo iBed"></a>

        <div class="navbar-header">
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="mobile-menu">

            <ul class="w-100 nav navbar-nav d-flex justify-content-around">

                <li class="nav-item">
                    <a class="nav-link text-white" href="/Accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Depot">Déposer une annonce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Connexion">Connexion</a>
                </li>
                <li>
                    <a class="nav-link text-white" href="/Inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/Aide">Aide</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean();?>