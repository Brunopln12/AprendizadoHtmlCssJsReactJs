let num1,num2

// código que compara se 2 números são iguais e se suas somas são maior ou menor do que 20 e 10

function iguais(num1,num2) {
    let comp1 = num1===num2 ? "" : "não"
    let soma = num1+num2
    let maior10 = soma>10 ? "maior" : "menor"
    let menor20 = soma<20 ? "menor" : "maior"
    return  `Os números ${num1} e ${num2} ${comp1} são iguais. Sua soma é ${soma} que é ${maior10} do que 10 e ${menor20} do que 20.`
}
console.log(iguais(10,10));