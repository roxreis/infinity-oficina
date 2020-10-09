
<?php $v->layout("template");?>

<section class="d-flex flex-column align-items-center">
    <form  class="col-4 form-adm " action="<?= url("vagas/atualizar/{$job->id}"); ?>" method="POST" enctype="multipart/form-data" >
        <div class="form-group div-form-adm">
            <h3>Editar vagas</h3>
            <div class="form-group">
                <label>Nome da Vaga</label>
                <input name ="job_name" type="text" class="form-control" value= <?= $job->job_name; ?> placeholder="Ex: Funileiro">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea name="job_description" class="form-control"  placeholder="Ex: Será responsavel por toda a funilaria"><?= $job->job_description; ?></textarea>
            </div>
            <div class="form-group">
                <label>Requisitos</label>
                <textarea name="job_need" class="form-control" rows="3"  placeholder="Apertar enter a cada tópico/requisito escrito"><?= $job->job_need; ?></textarea>
            </div>
            <div class="form-group">
                <label>Salário</label>
                <input name ="job_money" type="text" class="form-control" value= <?= $job->job_money; ?> placeholder="Se não tiver valor definido, colocar 'a combinar'">
            </div>
        </div> 
        <button type="submit" class="btn btn-primary">Atualizar</button>   
    </form>
</section>