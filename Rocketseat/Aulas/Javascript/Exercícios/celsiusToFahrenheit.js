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

/* 
    Solução própria
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
*/

// transformDegree("50F")

function transformDegree(degree) {
    const celsiusExists = degree.toUpperCase().includes("C")
    const fahrenheitExists = degree.toUpperCase().includes("F")
        // Fluxo de erro
    if(!celsiusExists && !fahrenheitExists){
        try {
            throw new Error("Grau não identificado!")
        } catch (error) {
            console.log(error.message)
        }
    } 
        // Fluxo ideal, F -> C
    let updateDegree = Number(degree.toUpperCase().replace("F", ""));
    let formula = (fahrenheit) => (fahrenheit-32)* 5/9
    let degreeSign = "°C"

        // Fluxo alternativo, C -> F
    if(celsiusExists) {
         updateDegree = Number(degree.toUpperCase().replace("C", ""));
        formula = (celsius) => ((celsius * 9)/5) + 32
        degreeSign = "°F"
    }

    return console.log(formula(updateDegree) + degreeSign)
}

transformDegree("60c")