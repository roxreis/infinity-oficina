// confirmação deletar vagas

$('.deletar').on('click', function(event){
    event.preventDefault();

    var link=$(this).attr('href');

    if(confirm("Deseja excluir este dado?")){
        window.location.href=link;

    }else{
        return false;
    }
});


