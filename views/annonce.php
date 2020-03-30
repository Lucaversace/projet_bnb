<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Aide";
?>

<?php ob_start();?>
<style>
    img {
      border-radius: 2vw;  
      width: 50%;
    }
</style>
<h1>

</h1>
<div class="container-fluid row">
    <div class="col-md-8 border-right border-dark">

        <div class="w-100">
             <img src="img/desktop/annonce/ori4.png" alt="">
        </div>

        <div>
            <img src="img/desktop/annonce/ori5.png" alt="">
        </div>

        <div>
             <img src="img/desktop/annonce/ori7.png" alt="">
        </div>

 </div>
 <div class="row h-25 border border-dark rounded">
     <div class="col-6"> Arrivée: 15 aout</div>

     <div class="col-6 border-left border-dark">Départ: 30 aout</div>

     <div class="col-12 border-top border-dark">Voyageurs : 3 vacanciers</div>

 </div>
    <div class="col-md-4">
        <div class="bg-primary">
            <p>Terminal</p>
        </div>

    </div>
</div>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>