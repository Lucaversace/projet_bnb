<?php
$sep = DIRECTORY_SEPARATOR;

define('VIEWS', dirname(__DIR__). $sep . 'projet_bnb'. $sep . 'app' . $sep . 'views/');
require_once "app/controller/routeController.php";


$routing = new routeController();

switch ($_SERVER['REQUEST_URI']) {
    case '/projet_bnb/':
        $routing->get_home('home');
        break;
    case '/projet_bnb/index.php?action=home':
        $routing->get_home('home');
        break;
    case '/projet_bnb/index.php?action=deposit':
        $routing->get_deposit();
        break;
    case '/projet_bnb/index.php?action=registration':
        $routing->get_registration();
        break;
    case '/projet_bnb/index.php?action=help':   
        $routing->get_help();
        break;
    default:
        header('HTTP/1.0 404 Not Found');
}

