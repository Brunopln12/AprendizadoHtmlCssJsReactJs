var number1 = document.querySelector('input#pri_number')
var number2 = document.querySelector('input#seg_number')
var number3 = document.querySelector('input#ter_number')
var resposta = document.querySelector('div#resposta')



function ordenar(){
    if(number1.value.length == 0 || number2.value.length == 0 || number3.value.length == 0){
        window.alert('Está faltando dados!')
    }
    var array = [number1.value, number2.value, number3.value]
    var array1 = [number1.value, number2.value, number3.value]
    
    array1.sort()

    return resposta.innerHTML = `Você digitou os números ${number1.value}, ${number2.value} e ${number3.value} a ordem do array foi [${array}] e ficou [${array1}]`
}

