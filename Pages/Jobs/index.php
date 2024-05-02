<section class="row" id="Section-Jobs">

  <h3 class="text-center">Como trabalhamos</h3>
  <hr class="hr">

  <?php for($i = 1; $i<=4; $i++){ ?>
    
    <article class="bloco-jobs col-12 col-md-3">
      <h4 class="text-center">Serviço <?= $i ?></h4>
      <div class="col-12 float-start img-jobs">
        <img src="../../assets/img//articles/job<?= $i ?>.jpg" alt="Serviço 1" class="img-fluid">
        <!-- <i class="fa-solid fa-person-digging icones-jobs"></i> -->
      </div>
      <div class="col-12 col-md-9 float-start">
        <p class="lead text-justify">
          Lorem Ipsum: is simply dummy text of the printing and typesetting industry. 
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
        </p>
      </div>
    </article>

  <?php } ?>

</section>