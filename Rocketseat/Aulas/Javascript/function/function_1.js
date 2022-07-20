// function expression
// function anonymous

// parameters

/*const sum = function(number1, number2){
    console.log(number1 + number2)
}*/

/*sum(2, 3) argumentos - arguments*/

let number1 = 3
let number2 = 2

const sum = function(number1, number2){
    let total = number1 + number2
    return total
}
console.log(`A soma é ${sum(number1, number2)}`)