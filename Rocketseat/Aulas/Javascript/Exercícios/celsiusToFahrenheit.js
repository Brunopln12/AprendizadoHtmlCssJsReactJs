/*
Celsius to Fahrenheit
Descrição
Nesse desafio faremos uma função que vai receber uma string em Celsius ou Fahrenheit, e fazer a transformação de uma unidade para a outra.

Desafio:

Crie uma função que receba uma string em celsius ou fahrenheit
e faça a transformação de uma unidade para outra 
    C = (F - 32) * 5/9 
    F = C * 9/5 + 32
*/

let temperatura = ""

function Converter (temperatura, unidadeDeMedida) {
    const newTemper = Number(temperatura)
    
    if(unidadeDeMedida == "C"){
        let fahrenheit = ((newTemper * 9)/5) + 32
        return fahrenheit
    } else if(unidadeDeMedida == "F") {
        let celsius = (newTemper - 32) * 5/9
        return celsius 
    }
}

console.log(Converter("1", "F"))