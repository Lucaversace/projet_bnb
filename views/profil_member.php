<?php

require_once "../views/layout/header.php";
require_once "../views/layout/footer.php";

$title = "membre";
?>

<?php ob_start();?>

<h1>Profil Membre</h1>


<?php $content = ob_get_clean();?>

<div class="container-fluid">
    <div class="row Membre">
		<div class="col-md-3">
			<div class="Membre-menu d-flex flex-column justify-content-center">
				<!-- MENU -->
				<div class="Membre-img d-flex justify-content-center">
					<img src="img/desktop/profildesktop.png" class="img-responsive" alt="">
				</div>
				<!-- FIN MENU-->
				<!-- TITRE -->
				<div class="Membre-titre">
					<div class="Membre-titre-nom">
						John Smith
					</div>
					<div class="Membre-titre-pays">
						France
					</div>
				</div>
				<!-- FIN TITRE -->
				<!-- BOUTONS -->
				<div class="Membre-boutons  d-flex flex-column justify-content-center ">
					<div>
					<button type="button" class="btn btn-primary btn-sm w-50  disabled">Telephone</button>
					</div>
					<div>
					<button type="button" class="btn btn-primary btn-sm w-50 disabled"> Email </button>
					</div>	
				</div>

				<!-- CENTRE -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="Membre-centre">
			   <h2>BONJOUR, JE M'APPELLE JOHN !</h2>
			   <p> Membre depuis 2020 </p>
			   <p> Habite à Lyon, France </p>
			   <hr></hr>
			   <h6> Annonce de John : <h6>
			   <div class="Membre-img d-flex justify-content-center">
					<img src="img/desktop/annonce/ori4.png" class="img-responsive" alt="">
					<img src="img/desktop/annonce/ori5.png" class="img-responsive" alt="">
					<img src="img/desktop/annonce/ori7.png" class="img-responsive" alt="">
				</div>
				
			   </div>
            </div>
		</div>
	</div>
</div>

<style>

body {
  background: #F1F3FA;
}

.Membre {
  margin: 20px 0;
}

.Membre-menu {
	border-radius: 0.6vw;
  padding: 20px 0 10px 0;
  background: #fff;
  box-shadow: 5px 5px 5px rgba(0,0,0,0.4);
}

.Membre-img img {
  margin: 0 auto;
  width: 30%;
  height: 30%;
}

.Membre-titre {
  text-align: center;
  margin-top: 20px;
}

.Membre-titre-nom {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.Membre-titre-pays {
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.Membre-boutons {
  text-align: center;
  margin-top: 10px;
}

.Membre-boutons .btn {
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
  margin-top: 0.2vw;
}   

/* CENTRE */
.Membre-centre {
  padding: 30px;
  background: #fff;
  min-height: 460px;
  
  border-radius: 0.6vw;
}
 </style>



<?php $content = ob_get_clean();?>

<?php 
require_once("layout/template.php"); 
?>