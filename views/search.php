<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";
$title = "recherche";
?>

<?php ob_start();?>

<h1 class="h1search mt-5 ml-3"> Plus de "N" Recherche</h1>
<style>
    img {
      border-radius: 1vw;  
      width: 100%;
    }
</style>
<div  class="row mb-3 mt-5 ml-1 border-top border-bottom border-dark " > 
        <div class="col-md-3 mb-5 mt-5 ">
        <img src="img/desktop/annonce/ori4.png" alt=""> 
        </div> 
        <div class="col-md-3 mb-4 mt-4 mr-2 border-left border-dark">
        <h8 class="mb-2 mt-2">type d'hébergement</h8>
        <h3  class="mb-2 mt-4">Nom de l'hébergement</h3>
        <h5  class="mb-2 mt-5">Nombre de place</h5>
        <h5  class="mb-2 mt-5">Prix €</h5>
        </div>
        <div class="col-md-5 mt-4 mb-4 border-left border-dark">
        <h5  class="">Description :</h5>
        <h8 class="">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae neque iaculis, semper elit sit amet, lobortis dolor. Duis scelerisque ex vitae sem cursus, quis imperdiet neque interdum. Aliquam laoreet rhoncus nisi nec lacinia. In interdum risus vel magna vestibulum interdum. Morbi at condimentum est. Vivamus elementum risus tellus, vehicula tempor tortor viverra luctus. 
        </h8>
        </div>
</div>



<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>