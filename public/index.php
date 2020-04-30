<?php
require_once "../App/functions.php";
require_once "../vendor/autoload.php";
use App\Controller\RouteController;

$sep = DIRECTORY_SEPARATOR;

define('VIEWS', dirname(__DIR__). $sep . 'views/');
define('UTILS', dirname(__DIR__). $sep . 'App/');
?>

<?php

$routing = new RouteController();

$path = array("Accueil", "Annonce", "Inscription", "Depot", "Connexion", "Recherche", "Membre", "Profil", "Deconnexion");

foreach ($path as $key) 
{
    $tof = testing_url($key);
    if($tof)
    {
    break;
    }
}

if(!$tof)
{
    header('HTTP/1.0 404 Not Found');
}
else
{
    switch($key)
    {
        case 'Accueil':
            $routing->get_home();
        break;
        case 'Annonce':
            $routing->get_annonce();
        break;
        case 'Depot':
            $routing->get_deposit();
        break;
        case 'Inscription':
            $routing->get_registration();
        break;
        case 'Connexion':
            $routing->get_login();
        break;
        case 'Recherche':
            $routing->get_search();
        break;
        case 'Membre':
            $routing->get_profil_member();
        break;
        case 'Profil':
            $routing->get_profil();
        break;
        case 'Deconnexion':
            $routing->util_logout();
        break;
    }
}
