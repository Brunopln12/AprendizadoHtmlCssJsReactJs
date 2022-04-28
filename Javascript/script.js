let num1, num2
function iguais(num1,num2) {
    // verifica se os números são iguais//
    let comp1 = num1===num2
    // verificar a soma//
    let soma = num1+num2
    // verifica se a soma é maior que 10 //
    let maior10 = soma>10
    // verificar se a soma é menor que 20 //
    let menor20 = soma<10
    // resposta caso os números forem iguais ou diferentes //
    if(comp1=true){ console.log("") }
    else(comp1=false); { console.log("não"); }
    // resposta do maior 10 //
    if(maior10=true) { console.log("maior"); }
    else(maior10=false); { console.log("menor"); }
    // resposta do menor 20 //
    if(menor20=true){ console.log("menor"); }
    else(menor20=false); { console.log("maior"); }
    return  "Os números" + num1 + "e" + num2 + comp1 + "são" + "iguais. Sua soma é" + soma + ", que é" + maior10 + " que 10 e" + menor20 + " que 20."
}
console.log(iguais(10,20));