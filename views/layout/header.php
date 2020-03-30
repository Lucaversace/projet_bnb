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

                <li class="text-center nav-item">
                    <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "/Accueil") ? 'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;}"' : "" );?> class="nav-link" href="/Accueil">Accueil</a>
                </li>
                <li class="text-center nav-item">
                    <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "/Depot") ? 'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;}"' : "" );?> class="nav-link" href="/Depot">Déposer une annonce</a>
                </li>
                <li class="text-center nav-item">
                    <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "/Connexion") ? 'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;}"' : "" );?> class="nav-link" href="/Connexion">Connexion</a>
                </li>
                <li class="text-center nav-item">
                    <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "/Inscription") ? 'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;}"' : "" );?> class="nav-link" href="/Inscription">Inscription</a>
                </li>
                <li class="text-center nav-item">
                    <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "/Aide") ? 'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;}"' : "" );?> class="nav-link" href="/Aide">Aide</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<?php $header = ob_get_clean();?>