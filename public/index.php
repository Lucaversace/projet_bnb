<?php
require_once "vendor/autoload.php";
use App\Control\RouteController;

$sep = DIRECTORY_SEPARATOR;

define('VIEWS', dirname(__DIR__). $sep . 'views/');
?>

<pre>
<?php var_dump($_SERVER);?>
</pre>
<?php

$routing = new routeController();

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
    case '/Aide':   
        $routing->get_help();
        break;
    default:
        header('HTTP/1.0 404 Not Found');
}
