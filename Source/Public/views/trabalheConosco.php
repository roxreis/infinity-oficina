<?php $v->layout("template");?>

<!-- section -->
<div id="inner_banner">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center" >
            <h2 id="title-about" >Infinity Funliaria e Pintura</h2>
            <p class="large">Melhor serviço com melhor preço!</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-md-12 career">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 about_cont_blog" style="padding:0 15px;">
              <div class="full text_align_left">
                <h3 class="text-uppercase">Aqui na Infinity!<h3>
                <p>Junte-se à nossa equipe e some suas experiências conosco e verá que o espírito único de união e o ambiente familiar da
                    Infinity o fará crescer em possibilidades. </p>
                <ul>
                  <li><i class="fa fa-check-circle"></i>Presamos por um ótimo ambiente de trabalho</li>
                  <li><i class="fa fa-check-circle"></i>Estamos em franco crescimento</li>
                  <li><i class="fa fa-check-circle"></i>Faça parte de nosso time!</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img">
              <div class="full text_align_center"> <img class="img-responsive" src="<?= url('source/Public/images/equipe-oficina.jpg'); ?>" alt="#"> </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section padding_layout_1">
  <div class="container">
    <div class="col-md-12 career">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog" style="padding:0 15px;">
          <div class="full text_align_left">
            <h3 class="text-uppercase" >Nossas Vagas<h3>
              <?php if (isset($jobs)):?>
                <?php foreach ($jobs as $job): ?>
                  <div class="mb-3 p-3" style="background-color:white">
                    <div class="d-flex">
                      <i class="fa fa-money mr-2" aria-hidden="true"></i> 
                      <p id="moneyJob">R$ <?= $job->job_money; ?></p>
                    </div>
                    <br>
                    <h3 id="moneyName"><?= $job->job_name; ?></h3>
                    <div class="div-description-job">
                      <h4 >Descrição da vaga:</h4>
                      <p><?= $job->job_description; ?></p><br>
                    </div>
                    <div class="div-need-job">
                     <h4>O que é necessário:</h4>
                     <p><?= $job->job_need; ?></p><br>
                    </div>
                  </div >
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->


