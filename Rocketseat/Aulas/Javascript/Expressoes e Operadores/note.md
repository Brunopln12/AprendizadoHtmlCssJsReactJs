## Expressões e operadores

**Descrição**

Nas próximas aulas, falaremos sobre expressões e operadores.

Expresssões são bem tranquilas, porque expressões são qualquer linha de código que resolve alguma coisa no JavaScript, um exemplo é a expressão:

let number
Isso é uma expressão, já que estamos declarando uma váriavel, nesse caso com o valor de undefined.

Toda expressão do Javascript pode ou não terminar com ; (ponto e vírgula), o final de uma expressão é facultativa, mas em algumas outras linguagens é obrigatório o uso de ; (ponto e vírgula).

Em alguns casos é necessário o uso de ; (ponto e vírgula), como numa função auto-executável, é um dos poucos casos onde faz falta, e é em um cenário como o seguinte:

let number = 1

(function(){
  console.log('alo')
})()
Caso você tente executar esse código, ele vai tentar atribuir essa função ao valor 1, onde o Javascript vai tentar executar o 1, passar uma função como argumento, e o 1 vai receber uma outra função. Um dos pouquíssimos casos onde o ; (ponto e vírgula) faz falta.

Veremos também sobre operadores, nesse exemplo temos o binário, unário e ternário.

/* unário */
let number = 1

console.log(++number)

/* binário */
let number = 1

console.log(number + 1)

/* ternário */
console.log(true ? 'alo' : 'nada')
Como você pode observar, temos no unário um elemento, no binário dois elementos e no ternário três elementos.

## New
**Descrição**

A expressão new, também denominada como left-hand-side expression, serve para criar um novo objeto usando as funções construtoras que temos por padrão no JavaScript.

Um exemplo de seu uso é:

let date = new Date('2020-12-01')
console.log(date./* __proto__ */ )

## Typeof delete

**Descrição**

Em operadores unários, os mais comuns são o typeof e o delete, onde o typeof serve para saber o tipo de dado que temos na expressão, e o delete vai deletar alguma propriedade de um objeto, desde que ela exista.

Exemplos de uso:

/* delete */
const person = {
    name: 'Mayk',
    age: 25,
}
delete person.age

console.log(person)
Nesse caso estamos deletando a propriedade age do objeto person.

console.log(tyepof "mayk")
Aqui vemos qual o tipo de dado que temos, nesse caso uma string.

## Operadores aritméticos

**Descrição**

Falaremos nessa aula sobre operadores aritméticos, que nos possibilitam fazer cálculos matemáticos.

O operador de multiplicação é o * (asterisco);

O operador de divisão é a / (barra);

O operador de soma é o + (positivo);

O operador de subtração é o - (negativo).

Outros operadores aritméticos incluem o resto de divisão, incremento, decremento e exponencial, com exemplos a seguir:

/* resto da divisão: sinal % */
let remainder
remainder = 11 % 9
console.log(remainder)

/* incremento: sinal ++ */
let increment = 0

console.log(++increment)
console.log(increment)

/* decremento: sinal -- */
let decrement = 0
decrement--
console.log(decrement)

/* exponencial: sinal ** */
console.log(2 ** 3)

## Grouping operator

**Descrição**

Vamos falar sobre um operador que agrupa expressões, os parênteses.

Na matemática, temos uma noção de precedência, onde certos operadores têm de ser realizados primeiro, e não é diferente para um computador, porém, podemos utilizar os parênteses para realizar o agrupamento de alguns operadores, que moverá a precedência do cálculo.

let total = 2 + 3 * 5
console.log(total)
//com essa precedência, nosso resultado é 17.

let total = (2 + 3) * 5
console.log(total)
// o cálculo mudou a precedência, fazendo nosso resultado tornar-se 25.

## Operadores de atribuição

**Descrição**

Veremos nesta aula sobre operadores de atribuição. Quando falamos em atribuição, queremos na verdade dizer assignment, que já vimos bastante, mas podemos também realizar diferentes tipos de atribuição, usando operadores aritméticos.

Exemplos:

// Operadores de atribuição (Assignment)
let x

// assignment normal:
x = 1

// addition assignment (adição):
x += 2

// subtraction assignment (subtração):
x -= 1

// multiplication assignment (multiplacação):
x *= 2

// division assignment (divisão):
x /= 2

// exponetiation assignment (exponenciação):
x **= 2

// remainder assignment (resto de divisão):
x %= 2

## Operador condicional ternário

**Descrição**

Os operadores ternários, conhecidos como operadores de condição, como o nome sugere, são dependentes de condições e podem entregar valores diferentes com base nelas.

Funciona da seguinte forma;

condição ? valor1 : valor2
Exemplo de uso:

// Café da manhã top
let pao = false
let queijo = false

const niceBreakfast = pao || queijo ? 'Café top' : 'Café ruim'

console.log(niceBreakfast)

## Operadores para string

**Descrição**

Temos também os string operators, os operadores de string, e nós até já vimos um desses antes, o comparison operator, ou ==, para os mais íntimos.

Agora vamos ver sobre a concatenação, que é o retorno da união de duas strings.

Seu símbolo é o de + (positivo), e seu uso é simples, algo próximo de:

console.log('a' + 'a')
// nesse caso, o retorno da string seria aa.

## Falsy e truthy

**Descrição**

O falsy é quando um valor é considerado falso em contextos que onde um booleano é obrigatório (condicionais e loops), exemplo a seguir:

/*
	Todos os valores abaixo seriam representados como false em um boolean.
		false
    0
    -0
    ""
    null
    undefined
    NaN
*/

console.log( NaN ? 'verdadeiro' : 'falso' )
já o truthy é o oposto, quando um valor é considerado verdadeiro (true) em contextos onde um booleano é obrigatório (condicionais e loops), exemplo a seguir:

/* 
	Todos os valores abaixo seriam representados como false em um boolean.
		true
    {}
    []
    1
    3.23
    "0"
    "false"
    -1
    Infinity
    -Infinity
*/

console.log( Infinity ? 'verdadeiro' : 'falso' )

## Precedência dos operadores

**Descrição**

Nesta aula mostraremos a precedência dos operadores, ou seja, a ordem de importância de cada um deles.

// De cima para baixo, do mais importante ao menos importante.

* grouping                      ( )
* negação e incremento          ! ++ --
* multiplicação e divisão       * /
* adição e subtração            + -
* relacional                    < <= > >=
* igualdade                     == != === !==
* AND                           && 
* OR                            ||
* condicional                   ?:
* assignment (atribuição)       = += -= *= %= 