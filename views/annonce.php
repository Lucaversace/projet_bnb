<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Aide";
?>

<?php ob_start();?>
<style>

</style>
<h1>

</h1>
<div class="container-fluid bg-secondary">
    <div class="col-8 col-xs-12 border-right border-dark">
            <div class="row bg-dark d-flex justify-content-center">
                <div class="p-5">
                    <img class="w-100" src="img/desktop/annonce/ori4.png" alt="">
                </div>
            </div>
            <div class="row d-flex justify-content-around bg-primary">
                <div class="col-5">
                    <img class="w-100" src="img/desktop/annonce/ori5.png" alt="">
                </div>
                <div class="col-5">
                    <img class="w-100" src="img/desktop/annonce/ori7.png" alt="">
                </div>
            </div>
            
        </div>
        <div class="col-4 bg-warning">
                <div class="row d-flex justify-content-around">
                    <div class="p-3">
                        <img class="w-100" src="img/desktop/annonce/ori5.png" alt="">
                    </div>
                    <div class="p-3">
                        <img class="w-100" src="img/desktop/annonce/ori7.png" alt="">
                    </div>
                </div>
    </div>

</div>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>