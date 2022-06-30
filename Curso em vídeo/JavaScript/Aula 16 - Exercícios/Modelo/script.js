var resultado = document.querySelector('#result')
var elemento = document.getElementById('elemento')
var tab = document.getElementById('seltab')
var array = []

function adicionar(){
    if(elemento.value.length == 0){
        window.alert('Por favor, digite um número!')
    } else if (elemento.value < 1 || elemento.value > 100){
        window.alert('O valor digitado deve ser entre 1 e 100')
    } else if(array.includes(Number(elemento.value))){
        window.alert('Já contém este elemento!')
    }
    else{
        var numero = Number(elemento.value)
        var item = document.createElement('option')
        tab.appendChild(item)
        array.push(Number(elemento.value))
        item.text = `Vetor ${numero} adicionado`
        resultado.innerHTML = ''
    }
    elemento.value = ''
    elemento.focus()
}

function analisar(){
    if (array.length == 0){
        return window.alert('Você precisa digitar valores para analisar!')
    } else{
       // função para ordenar um array numérico
        var arrayOrdenado = array.sort((a,b)=> a-b)
        var arrayMaior = array[array.length-1]
        var arrayMenor = array[0]
        // Soma todos os valores internos do array
        var arraySoma = array.reduce((acc, cur)=> acc + cur)
        var arrayMedia = arraySoma / array.length
    }    
    return resultado.innerHTML = `Ao todo temos ${array.length}. números cadastrados <br> O maior valor do vetor é ${arrayMaior}. <br> O menor valor do vetor é ${arrayMenor}. <br> A soma dos valores internos são ${arraySoma}. <br> A média dos valores digitados é ${arrayMedia}.`
}

