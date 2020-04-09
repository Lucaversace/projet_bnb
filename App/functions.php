<?php

function active_lien(string $lien):void
{
    if($_SERVER['REQUEST_URI'] == $lien)
    {
        echo'style="color:#8F5EB4;font-weight:bold" !important;font-weight:bold !important;"';
    }
    else {echo "";}
}