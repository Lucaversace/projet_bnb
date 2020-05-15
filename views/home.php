<?php
require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Accueil";
?>

<?php ob_start();?>


<style>
    #fond
    {
        width: 100vw;
    }
    #bloc-img{padding: 0;}
    figure img
    {
        margin-top: -13.5vw;
    }
    figure h1{
        position: relative;
        top: 1;
    }
    #text-img{
        padding: 2vw;
    }
    h1{color: white;}
</style>

<figure>
    <div id="text-img">   
        <h1>Bienvenue sur iBed, la plateforme d'hébergement entre particuliers.</h1>
    </div>
<div id="bloc-img">
<img id="fond" src="/img/desktop/accueil/fond.png" alt="">
</div>

</figure>

<form id="form-accueil" action="/Recherche" method="GET">
<div class="container bg-light p-5">
    <div class="row col-md-12">

        <div class="col-sm">
            <label class="" for="lieu"> Votre destination </label>
            <input  type="text" name="lieu">
        </div>

        <div class="col-sm">
            <label for="voyageur">Nombre de voyageurs</label>
            <select name="voyageur">
                <option >1</option>
                <option >2</option>
                <option >3</option>
                <option >4</option>
                <option >5</option>
            </select>
        </div>
        
        <button class="btn btn-primary">Rechercher</button>

    </div>
</div>
</form>
<?php $content = ob_get_clean();?>

<?php 
require_once("../views/layout/template.php"); 
?>