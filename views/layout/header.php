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

                <li class="text-center nav-item ">
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
                <li class="text-center nav-item d-lg-none "  >
                <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "/Profil") ? 'style="color:#8F5EB4;font-weight:bold " !important;font-weight:bold !important;}"' : "" );?> class="nav-link "  href="/Profil"><div class="d-lg-none "> Profil </div> </a>
                </li>
                <li class="text-center nav-item  d-lg-none  "  >
                <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "") ? 'style="color:#8F5EB4;font-weight:bold " !important;font-weight:bold !important;}"' : "" );?> class="nav-link "  href=""><div class="d-lg-none "> Deconnexion </div> </a>
                </li>
                <li class="text-center nav-item d-lg-none  "  >
                <a <?php echo( $style = ($_SERVER['REQUEST_URI'] == "") ? 'style="color:#8F5EB4;font-weight:bold " !important;font-weight:bold !important;}"' : "" );?> class="nav-link disabled "  href=""><div class="d-lg-none "> Solde : 1225 € </div> </a>
                </li>
           
            

                <div class="dropdown ">
                <button class="btn btn-default " type="button" id="dropdownprofil" data-toggle="dropdown">
                <img  style ="width:40px; height:38px;" class="d-none d-lg-block d-xl-none d-none  d-xl-block" alt="profil" src="img/desktop/profildesktop.png">
                </button>
                     <div class="dropdown-menu dropdown-menu-center" >
                         <a class="dropdown-item"  href="/Profil">Modifier Profil</a>
                         <a class="dropdown-item" href="/Membre">Voir mon Profil</a>
                         <a class="dropdown-item" href="">Deconnexion</a>
                         <a class="dropdown-item disabled" href="">Solde : 1225 €</a>
                    </div>  
                </div>
             </div>
            </ul>
    </div>
</nav>

<?php $header = ob_get_clean();?>