<?php $v->layout("template");?>

<section class="d-flex justify-content-center align-items-center flex-column">
    <form class="w-25 p-4 border-light"  action="<?= url('login'); ?>" method="POST" style= "background-color:#f5f5f5; margin: 150px 0px;">
    <?php if (isset($loginVazio) && $loginVazio != [] ) : ?>
        <div class="alert alert-danger" role="alert">
            <?= $loginVazio;?>
        </div>
    <?php endif;?>
        <div class= "form-group">
            <label for="exampleInputEmail1">Nome de usuário</label>
            <input name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome de usuário">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" maxlength="8">
        </div>
        <button type="submit" id="enter" class="btn btn-primary entrar" >Entrar</button>
    </form>
</section>


