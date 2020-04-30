<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Aide";
?>

<?php ob_start();?>
<style>
.shadow {
    box-shadow: 1vw 1vw 0.8vw rgba(0,0,0,0.16)!important;
}
h1{color:#8F5EB4;}
</style>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-8 border-right border-light">
            <div class="row  d-flex justify-content-center">
                    <div class="p-5">
                    <h1 class="">Titre de l'annonce</h1>
                        <img style="border-radius:1.2vw !important;" class="w-100 shadow" src="img/desktop/annonce/ori4.png" alt="">
                    </div>
            </div>

            <div class="row d-flex justify-content-around mb-3">

                <div class="col-5">
                    <img style="border-radius:1.2vw !important;" class="w-100 shadow" src="img/desktop/annonce/ori5.png" alt="">
                </div>

                <div class="col-5">
                    <img style="border-radius:1.2vw !important;" class="w-100 shadow" src="img/desktop/annonce/ori7.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="p-5">
                <div class="d-flex justify-content-between">
                <p>100€</p>
                <p>Nuit par Personne</p>
                </div>
                
                <div class="d-flex justify-content-between">
                    <p>Total</p>
                    <p>737 €</p>
                </div>
                <button class="btn btn-success w-100">Réserver</button>
                <a href="/Membre">Profil Membre</a>
            </div>
        </div>
    </div>  
</div>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>