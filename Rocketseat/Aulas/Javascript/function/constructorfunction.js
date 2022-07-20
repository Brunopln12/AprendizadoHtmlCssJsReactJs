/* Funções Construtoras

Descrição

Funções construtoras são utilizadas para criar novos objetos e geramente tem a sua primeira letra maiúscula, todos com as mesmas características que são criadas na função, usando a palavra reservada this para se referir ao objeto sendo criado, por exemplo:*/

function Person(name){
    this.name = name
    this.walk = function (){
        return this.name + " está andando"
    }
}

const bruno = new Person("Bruno")
const joao = new Person("João")

console.log(bruno.walk())
console.log(joao.name)

let name = new String("Bruno")
console.log(name)

let date = new Date("2022-07-20")
console.log(date)