<?php $v->layout("template");?>


<div class="error">

<?php if($error = 404): ?>
    <img src="<?= url("Source/Public/images/aviso-error.jpg") ;?>" style="width: 10rem; margin-bottom:10px;" alt="aviso">
    <h2>Ops, erro <?= $error ;?>, essa pagina não exite!</h2>
    <p>Você pode voltar a navegar pelo menu acima</p>

    <?php else: ?>
        <img src="<?= url("Source/Public/images/aviso-error.jpg") ;?>" style="width: 10rem; margin-bottom:10px;" alt="aviso">
        <h2>Ops, erro <?= $error ;?></h2>
        <p>Você pode voltar a navegar pelo menu acima</p>
<?php endif; ?>
</div>