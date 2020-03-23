<?php
$sep = DIRECTORY_SEPARATOR;

define('VIEWS', dirname(__DIR__). $sep . 'views/');
require_once "../app/controller/routeController.php";
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
    case '/home':
        $routing->get_home();
        break;
    case '/index.php':
        $routing->get_home();
        break;
    case '/deposit':
        $routing->get_deposit();
        break;
    case '/registration':
        $routing->get_registration();
        break;
    case '/login':   
        $routing->get_login();
        break;
    case '/help':   
        $routing->get_help();
        break;
    default:
        header('HTTP/1.0 404 Not Found');
}
