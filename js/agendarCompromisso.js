var quantidadePessoas = 1;

function verificarValoresIguais(){

}

function adicionarPessoa(){   
    quantidadePessoas = quantidadePessoas + 1;

    var novaPessoa = $("#pessoasDoCompromisso:first").clone();
    var botaoRemover = novaPessoa.find("button");
    alert(botaoRemover);
    var idNovaPessoa="pessoa"+quantidadePessoas;
    botaoRemover.setAttribute("id", idNovaPessoa);
    //chamar aqui função antes de adicionar o valor
    novaPessoa.insertAfter("#pessoasDoCompromisso:last");
   
}

function removerPessoa(qualPessoa){
    alert(qualPessoa);
    
}






