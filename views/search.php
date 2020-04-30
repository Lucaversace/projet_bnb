<?php
use App\Service\annonceService;

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";

$title = "Recherche";

if (isset($_POST['lieu']) and isset($_POST['voyageur'])) 
{
    echo "sa marche";
    $lieu = $_POST['lieu'];
    $voyageur = $_POST['voyageur'];

    $annonceService = new annonceService();
    $results = $annonceService->get_search_annonce($voyageur, $lieu);

    var_dump($results);
}

?>

<?php ob_start();?>
<style>
    img {
      border-radius: 1vw;  
      width: 100%;
    }
    .container-fluid:hover{
      background-color: grey;
    }
    a{
      color:black !important;
      text-decoration: none !important;
    }
</style>

<h1>Recherche</h1>

<?php foreach ($results[0] as $annonce => $data) 
{
    echo "{$annonce} => {$data}";
}

?>
<h1 class="h1search col-md-5 mt-5 ml-3 pb-2 border-bottom border-dark"> Plus de "N" Recherche</h1>

<a href="#">
<div class="container-fluid">
  <div  class="row mb-3 mt-5 ml-1 d-flex align-items-center " > 
          <div class="col-sm-3 mb-5 mt-5 ">
            <img src="img/desktop/annonce/ori4.png" alt=""> 
        </div> 
        <div class="col-sm-3  mr-sm-2 ">
           <h8 class="pb-2">type d'hébergement</h8>
            <h3  class="">Nom de l'hébergement</h3>
            <h5  class="mt-md-5 mt-sm-0">Nombre de place</h5>
            <h5  class="mt-md-5 mt-sm-0">Prix €</h5>
        </div>
        <div class="d-none d-md-block col-sm-5 mb-4 ">
            <h5  class="">Description :</h5>
            <h8 class="">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae neque iaculis, semper elit sit amet, lobortis dolor. Duis scelerisque ex vitae sem cursus, quis imperdiet neque interdum. Aliquam laoreet rhoncus nisi nec lacinia. In interdum risus vel magna vestibulum interdum. Morbi at condimentum est. Vivamus elementum risus tellus, vehicula tempor tortor viverra luctus. 
            </h8>
        </div>
</div>
</div>
</a>
<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>