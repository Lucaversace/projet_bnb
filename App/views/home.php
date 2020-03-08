<?php
require_once "app/layout/header.php";
require_once "app/layout/footer.php";
$title = "Accueil";
?>

<?php ob_start();?>

<h1>Réservez <br> des hébergements</h1>

<img id="fond" src="public/img/accueil/fond.png" alt="">

    <form id="form-accueil" action="" method="POST">

    <div>
        <label for="lieu"> Où ?</label>
        <input  type="text" name="lieu">
    </div>
    
    <div>
        <label for="date"> Date début</label>
        <input type="dated" class="datepicker" name="dated">
    </div>
    <div>
        <label for="datef">Date fin</label>
        <input type="date" class="datepicker" name="datef">
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
require_once("template.php"); 
?>