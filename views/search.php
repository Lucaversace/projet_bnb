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

<h1>Recherche</h1>

<?php foreach ($results[0] as $annonce => $data) 
{
    echo "{$annonce} => {$data}";
}

?>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>