<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "Aide";
?>

<?php ob_start();?>
<style>
    img{

    }
</style>
<h1>

</h1>
<div class="container-fluid"></div>

    <div class="col-xs-8 border-right border-dark">

        <div class="row">
            <div class="p-5">
                <img class="border border-white rounded" src="/img/desktop/annonce/ori4.png" alt="">
            </div>
        </div>
        <div class="row mt-5 d-flex justify-content-around mb-3">
            <div>
                <img class="border border-white rounded" src="/img/desktop/annonce/ori5.png" alt="">
            </div>
            <div>
                <img class="border border-white rounded" src="/img/desktop/annonce/ori7.png" alt="">
            </div>

        </div>
    </div>
    <div class="col-4"></div>
</div>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>