<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Accueil";
?>

<?php ob_start();?>

<style>
    #fond
    {
        width: 100%;
    }
</style>

<h1>Bienvenue sur iBed, la plateforme d'hébergement entre particuliers.</h1>

<img id="fond" src="/img/desktop/accueil/fond.png" alt="">

    <form id="form-accueil" action="/Recherche" method="GET">

    <div>
        <label for="lieu"> Votre destination </label>
        <input  type="text" name="lieu">
    </div>

    <div>
        <label for="voyageur">Nombre de voyageurs</label>
        <select name="voyageur">
            <option >1</option>
            <option >2</option>
            <option >3</option>
            <option >4</option>
            <option >5</option>
        </select>
    </div>
    
    <input type="submit" value="Rechercher">
    </form>


<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php"); 
?>