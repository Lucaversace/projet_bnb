<?php
namespace Feat;

    function nav_item(string $param, string $titre, string $linkClass =''): string
    {
        $classe = "nav-item";
        if($_SERVER['QUERY_STRING'] === $param){
            $classe .= ' active';
        }

        return  <<<HTML
        
        <li class="$classe">
        
        <a class="$linkClass" href="index.php?$param">$titre</a> </li>
HTML;
        
    }
    
?>