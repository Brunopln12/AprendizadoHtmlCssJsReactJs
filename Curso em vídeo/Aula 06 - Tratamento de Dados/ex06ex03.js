var n1 = Number.parseInt(window.prompt("Digite um número: ")) // prompt retorna uma string
var n2 = Number.parseInt(window.prompt('Digite outro número: ')) // conversão direta para um número inteiro

// O Js decide se será int ou float de acordo com os dados de entrada
var n3 = Number(window.prompt("Digite de novo um número podendo ser inteiro ou real: ")) 
var n4 = Number(window.prompt("Digite de novo um outro número podendo ser inteiro ou real: "))
var s = n1 + n2
var s1 = n3 + n4
window.alert("A soma dos números é: " + s)
window.alert("A soma dos números é: " + s1)
// Alerta utilizando place holder
window.alert(`A soma entre ${n1} e ${n2} é igual a: ${s}`)
// converter um número para uma string
s.toString() 
String(s1)
// template string inovador
let aula = "Javascript"
`Eu estou aprendendo ${aula}`
// qual o tamanho da string
s.length(s1)
// Jogar todas para letras maiúsculas
s.toUpperCase(s)
// Jogar todas para letras mnúsculas
s.toLowerCase(s1)