<?php

function active_lien(string $lien):void
{
    if($_SERVER['REQUEST_URI'] == $lien)
    {
        echo'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;"';
    }
    else {echo "";}
}

function redirect(string $location):void
{
    header('Location: '.$location);
    die();
}

function testing_url(string $test)
{   
    $url = $_SERVER['REQUEST_URI'];
    $tof = strpos($url, $test);

    return $tof;
}
