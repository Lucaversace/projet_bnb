<?php

require "controller/controller.php";
$param_url = $_GET['action'];

if(isset($param_url)){
   switch ($param_url) {
      case '':
         get_home();
         break;
      case 'home':
            get_home();
            break;
      case 'deposit':
            get_deposit();
            break;
      case 'registration':
            get_registration();
            break;
      case 'help':   
            get_help();
            break;
      default:
            echo "Cette page n'éxiste pas.";

  }

}
else{
   get_home();
}
   
