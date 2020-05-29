<?php
use App\Service\AnnonceService;

require_once "functions.php";

var_dump($_GET);

$id_annonce = $_GET['id'];
$id_membre = $_GET['idmembre'];

$annonceService = new AnnonceService();

$annonceService->delete_annonce_by_id($id_annonce);

redirect('Membre?id=' . $id_membre);