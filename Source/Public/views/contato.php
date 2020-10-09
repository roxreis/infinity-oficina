<?php $v->layout("template");?>


<!-- inner page banner -->
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
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="contact-div">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 adress_cont margin_bottom_30">
                <h4>Endereço</h4>
                <p>Fácil acesso!</p>
                <div class="information_bottom left-side margin_bottom_20_all">
                  <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>Av. São Miguel, 5.555 - Ponte Rasa</h4>
                    <p>São Paulo - SP</p>
                  </div>
                </div>
                <div class="information_bottom left-side margin_bottom_20_all">
                  <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>(11) 2026-1099</h4>
                    <p>Seg - Sex 8:00am-18:00pm</p>
                  </div>
                </div>
                <div class="information_bottom left-side">
                  <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>infinity@infinityoficina.com.br</h4>
                    <p>respondemos o mais breve!</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h4>MANDE-NOS UMA MENSAGEM</h4>
              <p>Cotações, dúvidas ou sugestões</p>
              <div class="form_section">
                <form class="form_contant" action="<?= url('email/enviar'); ?>" method="POST" enctype="multipart/form-data">
                  <fieldset>
                  <div class="row">
                    <!-- <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Websire URL" type="text" required />
                    </div> -->
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Nome" type="text" name="name" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Email" type="email" name="email" required />
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Fone (opcional)" name="phone" type="text" />
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea class="field_custom" placeholder="Mensagem" name="msg" required ></textarea>
                    </div>
                    <div class="center"><input class="btn main_bt"  value="Enviar" type="submit"></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

