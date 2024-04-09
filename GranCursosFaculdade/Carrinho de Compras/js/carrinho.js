function alterarQtd(produto, acao){
    const qtd = document.getElementById("qtd_" + produto);
    const valor = document.getElementById("valor_" + produto);
    const total = document.getElementById("total_" + produto);

    if(acao == '-' && qtd.innerHTML == 0){
        alert("Atenção a quantidade não pode ser negativa!!!");
    }else{
        acao == '+' ? qtd.innerHTML++ : qtd.innerHTML--
        const valorTotal = qtd.innerHTML * somenteNumeros(valor.innerHTML)
        total.innerHTML = formatarValor(valorTotal)
        soma()
    }
}

function soma() {
    let soma = 0;

    for (let index = 1; index < 4; index++) {
        let numero = somenteNumeros(document.getElementById("total_" + index).innerHTML)
        soma += Number(numero)
    }
    document.getElementById("subtotal").innerHTML = soma;
}

function somenteNumeros(params) {
    return params.replace(/\D/g, '')
}

function formatarValor(params) {
    return 'R$ ' + params.toLocaleString('pt-BR')
}