function contar(){
let inicio = document.querySelector('input#inicio')
let fim = document.querySelector('input#fim')
let passo = document.querySelector('input#passo')
let resultado = document.querySelector('div#content__resultado')

    if (inicio.value.length == 0 || fim.value.length == 0 || passo.value.length == 0){
        // veirifica se tem algum dado faltando
        resultado.innerHTML = `Impossível contar!`
        // window.alert('[ERRO] Faltam dados!')
    } else{
        resultado.innerHTML = `Contando...`
        let i = Number(inicio.value)
        let f = Number(fim.value)
        let p = Number(passo.value)
        
        if(p == 0){
            window.alert(`Passo Inválido! Considertando passo igual a 1`)
            p = 1
        }
        if(i < f){
            // contagem crescente
            for(c=i; c <= f; c += p) {
            resultado.innerHTML += ` ${c} \u{1F449}`
            }
        // contagem decrescente
        } else{

        for(c=i; c >= f; c -= p) {
            resultado.innerHTML += ` ${c} \u{1F449}`
            }
        }
        resultado.innerHTML += `\u{1F3C1}`
    }

}