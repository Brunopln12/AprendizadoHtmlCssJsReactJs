/*
Fluxo de caixa familiar
Descrição
Esse desafio envolve a criação de dois arrays e um função que calculará o resultado desses valores, dizendo se é positivo ou negativo, e após isso, o valor do saldo.

Desafio:

Crie um objeto que possuirá 2 propriedades, ambas do tipo array:
    * receitas: [] 
    * despesas: []
Agora, crie uma função que irá calcular o total de receitas e 
despesas e irá mostrar uma mensagem se a família está com 
saldo positivo ou negativo, seguido do valor do saldo.
*/
const contasDaFamilia = {
    receitas:[2, 2, 3],
    despesas:[2, 3, 1]
} 

function sum(array) {
    let total = 0;
    for (const iterator of array) {
        total += iterator
    }
    return total
}

function Balance(caixa) {
    let balance = sum(caixa.receitas) - sum(caixa.despesas)
    let message = "";
    if(balance < 0){
        message = `O seu balanço ficou negativo: ${balance}`
    } else if(balance == 0){
        message = `O seu balanço ficou zerado!`
    } else {
        message = `O seu balanço ficou positivo: ${balance}`
    }
    return message
}

console.log(Balance(contasDaFamilia))