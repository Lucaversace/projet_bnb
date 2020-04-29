<?php
require_once "functions.php";
session_start();
if(isset($_SESSION['status']) && $_SESSION['status'] == 'connected')
{
    $_SESSION = [];
    redirect('/');
}