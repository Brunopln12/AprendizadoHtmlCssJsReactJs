/*
Sistema de notas escolares

Descrição

Esse exercício vai trabalhar a transformação de notas escolares, onde devemos criar um algoritmo para transformar notas númericas em notas de caracteres.

Desafio:

Crie um algoritmo que transforme as notas do sistema
numérico para sistema de notas em caracteres tipo A B C

* de 90 para cima -   A
* entre 80 - 89   -   B
* entre 70 - 79   -   C
* entre 60 - 69   -   D
* menor que 60    -   F
*/

function transformScore(nota){
  if (nota >= 90) {

    scorefinal = "A"

  } else if (nota < 90 && nota >=80){

    scorefinal = "B"
    
  } else if (nota < 80 && nota >=70){

    scorefinal = "C"
    
  } else if (nota < 70 && nota >=60){

    scorefinal = "D"
    
  } else if (nota < 60 && nota >=0){

    scorefinal = "F"

  } else {

    scorefinal = "Nota inválida!"

  }
  return console.log(scorefinal)
}

transformScore()