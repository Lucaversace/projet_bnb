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
        <div class="col-md-4 pt-5 mt-5 ">
            <div class="p-5 border-top border-black">
                <div class="d-flex justify-content-between ">
                <p>100€</p>
                <p>Nuit par Personne</p>
                </div>
                <div class="container-fluid">
  <div class="row">
   <div class="col-md-12 col-sm-6 col-xs-12">


    <form method="post">
      <div class=" col-md-12 col-sm-6 col-xs-12 mt-4">
            <label class="col-md-5 " for="date">Arrivée</label>
            <input class=" col-md-5" id="arrivee" name="arrivee" placeholder="Ex:03/09/2020" type="text"/>
            <label class="col-md-5" for="date">Départ</label>
            <input class="col-md-5" id="depart" name="depart" placeholder="Ex:03/16/2020" type="text"/>
        </div>
        <div class="form-group col-md-10 col-sm-6 col-xs-12 ml-md-2 ">
            <label for="Nmbre_personne"></label>
            <select id="Nmbre_personne" class="form-control">
                <option selected>Nombre de personne</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
     </form>

    
  </div>    
 </div>
</div>

                <div class="d-flex justify-content-between mt-3 border-bottom border-black">
                    <p>Total</p>
                    <p>737 €</p>
                </div>
                <button class="btn btn-success w-100 mb-5 mt-3">Réserver</button>

                <div class="pb-5 border-bottom border-black">
                    <img class="w-25 " src="img/desktop/profildesktop.png" alt="">
                    <a href="/Membre">Profil Membre</a>
                </div>
            </div>
        </div>
    </div>  
</div>

<div class="col-12">
            <h5  class="col-md-2 pb-2 border-bottom border-dark">Description :</h5>
            <div class="col-md-8 mb-5">
                <h8 >
                Le logement est tout équipé et conviendra parfaitement à un séjour touristique ou professionnel à Paris. Il sera très apprécié pour sa proximité avec les lieux préférés des locaux.

                Magnifique studio de 25 mètres carré situé dans le 16ème arrondissement de Paris. Il est localisé au 4ème étage avec ascenseur.
                Le studio peut accueillir jusqu'à 2 personnes. Il est idéalement placé à proximité de l'Avenue Foch et de l'Arc de Triomphe. L'arrondissement est essentiellement résidentiel et reposant, mais néanmoins visité par les touristes pour ses nombreux musées et ses lieux remarquables comme le Trocadéro ou le bois de Boulogne. 
                </h8>
            </div>
        </div>

<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>