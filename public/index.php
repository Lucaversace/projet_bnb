<?php

require_once "../vendor/autoload.php";
use App\Controller\RouteController;

$sep = DIRECTORY_SEPARATOR;

define('VIEWS', dirname(__DIR__). $sep . 'views/');
define('UTILS', dirname(__DIR__). $sep . 'App/');
?>


<?php

$routing = new RouteController();

switch ($_SERVER['REQUEST_URI']) {
    case '/':
        $routing->get_home();
        break;
    case '/Accueil':
        $routing->get_home();
        break;
    case '/index.php':
        $routing->get_home();
        break;
    case '/Depot':
        $routing->get_deposit();
        break;
    case '/Inscription':
        $routing->get_registration();
        break;
    case '/Connexion':   
        $routing->get_login();
        break;
    case '/Annonce':   
        $routing->get_annonce();
        break;
    case '/Profil':   
        $routing->get_profil();
        break;
    case '/Membre':   
        $routing->get_profil_member();
        break;
    case '/Deconnexion':   
        $routing->util_logout();
        break;
    default:
    
        header('HTTP/1.0 404 Not Found');
}
