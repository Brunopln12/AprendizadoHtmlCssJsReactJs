# Anotações da Aula 15

## Váriaveis Compostas

Capaz de armazenar vários valores em uma mesma estrutura.

obs: colocar nomes claros nas váriaveis

### Declarando uma variável composta

vaga a = [carro1, carro2, carro3]

os índices são identificados como 

a de índice 0 = carro1
a de índice 1 = carro2
a de índice 2 = carro3

A variável a é um vetor array e tem varíos elementos os carros são os conteúdos do elemento e os índices chaves são os índices dos arrays, exemplo: 0, 1, 2,...,etc.

let num = [5, 8, 4] - vetor de 3 elementos 0, 1 e 2 que tem os valores 5, 8 e 4.

### Acrescentando valores

num[3] = 6 - O javaScript percebe que o nosso vetor não tem um índice 3 e ele acrescenta esse índice e ainda adiciona o valor que no novo elemento

num.push(7) - O javaScript acrescenta valores a um array ao final dele

num.length - Para saber o comprimento do array

num.sort() - Pega todos os valores dentro dos elementos e coloca em ordem crescente

#### Mostrar na tela

Laço for

let valores = [1, 0, 3, 4]

for(let pos = 0; pos < valores.length; pos++){
    console.log(pos, valores[pos])
}

laço for( in ){} Para cada posição na variável composta eu vou mostrar a posição

for(let pos in num){
    console.log(num[pos])
}

#### Buscar valores dentro de um vetor

num.indexOf(7) - Busca valores dentro de um vetor e retorna o índice desse valor, Se caso ele pesquisar os valores e não encontrar ele vai retornar o índice -1 por que para o javaScript quando não encontra um valor ele retorna -1