<?php $v->layout("template");?>


<section class="d-flex flex-column align-items-center">
    <div class="row m-5 col-lg-10 justify-content-center bg-white ">
        <form  class=" col-12 col-lg-4 form-adm" action="<?= url('contador/criar'); ?>" method="POST" enctype="multipart/form-data" >
            <div class="form-group">
                <h3>Número dos serviços executados</h3>
                <div class="form-group div-form-adm">
                    <label class="mr-1"> Clientes Satisfeitos</label>
                    <input  value= <?= $counters->satisfied_customers; ?> name="satisfied_customers" type="number" class="form-control col-3" min="1">
                </div>
                <div class="form-group">
                    <label class="mr-1">Serviços de Pintura</label>
                    <input value="<?= $counters->painting; ?>" name="painting" type="number" class="form-control col-3" min="1">
                </div>
                <div class="form-group">
                    <label class="mr-1">Serviços de Funilaria</label>
                    <input value="<?= $counters->body_shop; ?>" name="body_shop" type="number" class="form-control col-3" min="1">
                </div>
                <div class="form-group">
                    <label class="mr-1">Serviços de Estética</label>
                    <input value="<?= $counters->aesthetics; ?>" name="aesthetics" type="number" class="form-control col-3" min="1"> 
                </div>
            </div> 
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
    <div class="row m-5 col-12 col-lg-10 justify-content-center bg-white ">
            <form  class="col-4 form-adm " action="<?= url("vagas/criar"); ?>" method="POST" enctype="multipart/form-data" >
                <div class="form-group div-form-adm">
                    <h3>Divulgar vagas</h3>
                    <div class="form-group">
                        <label>Nome da Vaga</label>
                        <input name ="job_name" type="text" class="form-control" placeholder="Ex: Funileiro">
                    </div>
                    <div class="form-group">
                        <label>Descrição</label>
                        <textarea name="job_description" class="form-control" rows="3" placeholder="Ex: Será responsavel por toda a funilaria"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Requisitos</label>
                        <textarea name="job_need" class="form-control" rows="3" placeholder="Apertar enter a cada tópico/requisito escrito"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Salário</label>
                        <input name ="job_money" type="number" class="form-control" min="1" placeholder="Ex: 1500, 3500 - se não tiver valor, colocar 'a combinar'">
                    </div>
                </div> 
                <button type="submit" class="btn btn-primary">Cadastrar</button>   
            </form>
        <div class="col-lg-6 col-12 border border-dark" style="overflow:auto; border-radius:10px; margin:30px; padding:15px;">
            <h3>Vagas cadastradas</h3>
            <table class="tableAdm display dataTable dtr-inline table-sm table-striped" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;table-layout:fixed">
                <?php if(isset($jobs) && $jobs != 0): ?>
                    <?php foreach($jobs as $job): ?>
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Vaga</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Requisitos</th>
                                <th scope="col">Salário</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $job->id ?></th>
                                <td><?= $job->job_name ?></td>
                                <td><?= $job->job_description ?></td>
                                <td><?= $job->job_need ?></td>
                                <td><?= $job->job_money ?></td>
                                <td><a href="<?= url("vagas/editar/{$job->id}") ?>" class="btn btn-primary editar">Editar</a>
                                <a href="<?= url("vagas/excluir/{$job->id}");?>" class="btn btn-danger deletar">Deletar</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach;
                    else: ?>
                        <table class="table">
                            <h3 style="color: red">Não há vagas cadastradas</h3>"
                        </table>
                <?php endif; ?>
            </table>
        </div>
    </div>
    <div class="row m-5 col-lg-10 col-12 justify-content-center bg-white ">
         <form  class="form-adm mr-2" action="<?= url('usuario/criar'); ?>" method="POST" enctype="multipart/form-data" >
            <div class="form-group div-form-adm">
                <h3>Cadastrar usuário administrador</h3>
                   <div class="form-group ">
                    <label for="name" >Nome</label>
                    <input type="text" class="form-control" name="name" placeholder="Pode ser primeiro nome">
                </div>
                <div class="form-group mb-2">
                    <label for="password">Senha</label><br/>
                    <input type="pass" class="" name="pass"  maxlength="8" placeholder="Até 8 caracteres">
                </div>
            </div>    
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
        <form  class="form-adm"  >
                <div class="form-group div-form-adm">
                    <h3>Usuários administradores cadastrados</h3>
            
                    <div class="form-group ">
                    <?php foreach($users as $user): ?>
                        <label for="name" >Nome</label>
                        <p> <?= $user->user_name; ?> </p>
                    <?php endforeach ?>
                    </div>
                </div>  
        </form>
    </div>



</section>
<script >
alert($erroMsg);

</script>