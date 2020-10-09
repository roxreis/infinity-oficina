<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title><?= $title; ?></title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<!-- <link rel="icon" href="images/fevicon/car_icon.webp" type="image/gif" /> -->
<!-- bootstrap css -->
<link rel="stylesheet" href="<?= url('Source/Public/css/bootstrap.min.css'); ?>" />
<!-- Site css -->
<link rel="stylesheet" href="<?= url('Source/Public/css/style.css'); ?>"/>
<!-- responsive css -->
<link rel="stylesheet" href="<?= url('Source/Public/css/responsive.css'); ?>" />
<!-- colors css -->
<link rel="stylesheet" href= "<?= url('Source/Public/css/colors1.css'); ?>"/>
<!-- custom css -->
<link rel="stylesheet" href="<?= url('Source/Public/css/custom.css'); ?>" />
<!-- wow Animation css -->
<link rel="stylesheet" href="<?= url('Source/Public/css/animate.css'); ?>" />
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href= "<?= url('Source/Public/revolution/css/settings.css'); ?>" />
<link rel="stylesheet" type="text/css" href= "<?= url('Source/Public/revolution/css/layers.css'); ?>" />
<link rel="stylesheet" type="text/css" href= "<?= url('Source/Public/revolution/css/navigation.css'); ?>" />
   
</head>
<body id="default_theme" clas="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" style="width: 60px; height:60px;" src= "<?= url('Source/Public/images/loaders/car_icon.png'); ?>" alt="#" /> </div>
<!-- end loader ->
<-- header bottom --> 
 
<?php 

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if((!isset ($_SESSION['name']) == true) and (!isset ($_SESSION['pass']) == true))
{
  unset($_SESSION['name']);
  unset($_SESSION['pass']);

  }
  
if (isset($_SESSION['name'])) {
    $logado = $_SESSION['name'];
}


?>

  <div class="header_bottom">
    <div class="header-bottom-container">
      <div class="row justify-content-between">
        <div class="col-12 col-lg-7 col-xl-7">
          <!-- logo start -->
          <div class="logo"> <a href="<?= url(''); ?>"><img src="<?= url('Source/Public/images/logo.png'); ?>" alt="logo" /></a> </div>
          <!-- logo end -->
          <ul class="email-phone">
                <li> <span class="topbar-label"><i class="phone-icon fa fa-phone"></i><span class="topbar-hightlight">(11) 2026-1099</span> </li>
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Av. São Miguel 5.555 - Ponte Rasa</span> </li>
         </ul>
        </div>
        <?php if (!isset($logado)): ?>
        <div class="col-12 col-lg-5 col-xl-5 d-flex align-items-center justify-content-end">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li><a href="<?= url('quem-somos'); ?>">Quem Somos</a></li>
                <li> <a href="<?= url('trabalhe-conosco'); ?>">Trabalhe Conosco</a></li>
                <li> <a href="<?= url('contato'); ?>">Contato</a></li>
            </div>
          </div>
        </div>
        <?php else: ?>
          <div class="col-12 col-lg-5 col-xl-5 d-flex align-items-center justify-content-end">
            <div class="menu_side">
              <div id="navbar_menu">
                <ul class="first-ul">
                  <li><a href="<?= url('quem-somos'); ?>">Quem Somos</a></li>
                  <li> <a href="<?= url('trabalhe-conosco'); ?>">Trabalhe Conosco</a></li>
                  <li> <a href="<?= url('contato'); ?>">Contato</a></li>
                  <li>
                    <div id="div-logado">
                      <a id="logado"><?=$logado;?></a>
                      <a href="<?= url('logout'); ?>">(sair)</p></a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="header_bottom2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <!-- info-services-->
          <div class="info-services">
            <div id="navbar_menu">
              <ul class="second-ul">
                <li> <a class="second_menu">Funilaria e Pintura</a> </li>
                <li><a class="second_menu">Mecânica e elétrica rápidas</a></li>
                <li> <a class="second_menu">Polimento e Cristalização</a> </li>
                <li> <a class="second_menu">Atendemos Cias de seguro</a> </li>
                <li> <a class="second_menu">Garantia nos Serviços</a> </li>
                <li> <a class="second_menu">Plano auto</a> </li>
              </ul>
            </div>
          </div>
         <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  
  <!-- header bottom end -->
</header>
<!-- end header -->

<?= $v->section('content');?>;

 <!-- footer -->
<div class="section padding_layout_1 testmonial_section white_fonts">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2 style="text-transform: none;">O que os clientes estão dizendo no Google!?</h2>
            <p class="large"></p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        <div class="full">
          <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#testimonial_slider" data-slide-to="0" class="active"></li>
              <li data-target="#testimonial_slider" data-slide-to="1"></li>
              <li data-target="#testimonial_slider" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="testimonial-container">
                  <div class="testimonial-content">
                    Super indico! Bom Atendimento, entrega no prazo, Serviço de funilaria TOP e preço bacana. Ainda bem que  achei vocês, obrigada!</div>
                  <div class="testimonial-meta">
                    <span class="testimonial-position"></span> 
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content">
                    Serviço feito com perfeição! Encontrar uma funilaria boa hoje em dia é difícil. Recomendo muito o trabalho deles!</div>
                  <div class="testimonial-meta">
                    <span class="testimonial-position"></span> 
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial-container">
                  <div class="testimonial-content">
                    Serviço perfeito, entrega no prazo, muito prestativo e cumpri o que fala. Recomendo a todos se precisarem de funilaria e pintura de autos o serviço dessa empresa, pois eles fazem melhor que as expectativas.</div>
                  <div class="testimonial-meta">
                    <span class="testimonial-position"></span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="full"> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="<?= url ('Source/Public/images/it_service/phone_icon.png');?>" alt="#" /> </div>
            <div class="inner_cont">
              <h2>NÃO PERCA TEMPO, ENTRE EM CONTATO!</h2>
              <p>Cotações, dúvidas e sugestões</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="<?= url('contato')?>">Contato</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <li><img src="<?= url('Source/Public/images/logo_clientes/logo_Localiza.png');?>" alt="#" /></li>
            <li><img src="<?= url('Source/Public/images/logo_clientes/logo_movida.jpg');?>" alt="#" /></li>
            <li><img src="<?= url('Source/Public/images/logo_clientes/logo_unidas.jpg');?>" alt="#" /></li>
            <li><img src="<?= url('Source/Public/images/logo_clientes/logo_unnica.jpeg');?>" alt="#" /></li>
            <li><img src="<?= url('Source/Public/images/logo_clientes/logo_proauto.png');?>" alt="#" /></li>
            <li><img id="apvs"src="<?= url('Source/Public/images/logo_clientes/logo_apvs.png');?>" alt="#" /></li>
            <li><img src="<?= url('Source/Public/images/logo_clientes/logo_bemprotege.png');?>" alt="#" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->

<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
        <div class="map">
          <iframe id="img_map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29269.60107258972!2d-46.479717!3d-23.507308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x926d396ae1fe285c!2sInfinity%20Funilaria%20%26%20Pintura!5e0!3m2!1sen!2sbr!4v1601391959603!5m2!1sen!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-12">
            <div class="main-heading left_text">
              <h2>Missão, Visão e Valores</h2>
            </div>
              <p><strong>Missão - </strong> Oferecer serviços de reparos automotivos visando preservar a originalidade do veículo : peças da melhor qualidade
                conforme a necessidade do seu veículo, menor prazo, custo e benefícios, transparência e honestidade.</p>
              <p><strong>Visão  - </strong> Ser a maior e melhor oficina de reparos automotivos do Brasil, oferecendo o que á de mais moderno em
                ferramentas, atendimento, presteza e comodidade a nossos clientes e parceiros.</p>
              <p><strong>Valores  - </strong> Inovação, qualidade e excelência, qualidade é melhor do que quantidade, responsabilidade social e ambienta</p>
            </div>
          <div class="col-md-12">
            <div class="main-heading left_text">
              <h2>Contato</h2>
            </div>
            <div class="d-flex flex-column">
              <ul class="social_icons d-flex">
                <li class="social-icon fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="social-icon tw"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
              <p>Av. São Miguel, 5.555 - <br>
                Ponte Rasa, São Paulo SP<br>
              <span style="font-size:18px;"><a href="tel:+9876543210">(11) 2026-1099</a></span></p>
            </div>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        <a href="<?=url('adm')?>"> <i class="fa fa-arrow-circle-o-up text-white mt-4"> </i></a>
      </div>
      <div class="cprt">
        <p>© Copyrights 2020 - Developer Rodrigo Reis - rodrigoassuncao12@gmail.com</p>
      </div>
    </div>
  </div>

</footer>
<!-- end footer -->
<!-- js section -->

<script src="<?= url('Source/Public/js/jquery.min.js');?>"></script>
<script src="<?= url('Source/Public/js/bootstrap.min.js');?>"></script>
<!-- menu js -->
<script src="<?= url('Source/Public/js/menumaker.js');?>"></script>
<!-- wow animation -->
<script src="<?= url('Source/Public/js/wow.js');?>"></script>
<!-- custom js -->
<script src="<?= url('Source/Public/js/custom.js');?>"></script>
<!-- personal -->
<script src="<?=url('Source/Public/js/script.js');?>"></script>
<!-- revolution js files -->
<script src="<?= url('Source/Public/revolution/js/jquery.themepunch.tools.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/jquery.themepunch.revolution.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.actions.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.carousel.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.migration.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.navigation.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.parallax.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.video.min.js');?>"></script>
<script src="<?= url('Source/Public/revolution/js/extensions/revolution.extension.video.min.js');?>"></script>


</body>
</html>

