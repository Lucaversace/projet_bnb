<?php

function db_connexion():PDO
{
    $user = 'root';
    $pass = 'root';
    $pdo = new PDO('mysql:host=localhost;dbname=projet_bnb', $user, $pass);
    return $pdo;
}