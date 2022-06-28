var number1 = document.querySelector('input#pri_number')
var number2 = document.querySelector('input#seg_number')
var resposta = document.querySelector('div#resposta')

function ordenar(){
    if(number1.value.length == 0 || number2.value.length == 0){
        window.alert('Está faltando dados!')
    }

    let array = [number1.value, number2.value]
    if(array[1] < array[0]){
        let modificarArray = array[1]
        let modificarArray1 = array[0]
        var array2 = [modificarArray, modificarArray1]
    } else{
        var array2 = [number1.value, number2.value]
    }
    
    return resposta.innerHTML = `Você digitou os números ${number1.value} e ${number2.value} a ordem do array inicial foi [${array}] e a nova ordem foi [${array2}]`
}

