<?php ob_start();?>

<div class="container-fluid">
<footer style="border-top: 1px solid #D8D8D8" class="bg-dark row d-flex align-items-center flex-wrap justify-content-around">

      <div class="col-md-3 mt-3 d-flex flex-column align-items-center text-center">
        <h5>Besoin d'aide ?</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
        </ul>
      </div>

      <div class="col-md-3 mt-3 d-flex flex-column align-items-center text-center">
        <h5>Contact</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
        </ul>
      </div>

      <div class="col-md-3 mt-3 d-flex flex-column align-items-center text-center">
        <h5>À propos</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
        </ul>
      </div>

    </div>
  </footer>
  </div>
<?php $footer = ob_get_clean();?>