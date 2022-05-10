# Anotações da Aula 08

## Operadores no JavaScript

### Operadores Relacionais (Booleanos)

- > Sinal de maior
- < Sinal de menor
- >= Maior igual
- <= Menor igual
- == igual
- != não igual ou diferente

Se tiver operadores relacionais e aritiméticos na mesma linha 1° se faz os aritiméticos e depois os relacionais.

#### Operadores relacionais de Identidade

- 5 == 5 - true
- 5 == '5' - true
- 5 === '5' - false - operador de igualdade restrita ele testa o valor e o tipo da variável
- 5 === 5 - true
- 5 !== '5' - true - desigual restrito


### Operadores lógicos

- ! - negação - não (se for true ele inverte para false)
- && - conjunão - e (os dois casos tem que ser true)
- || - disjunção - ou (um ou o outro ou os 2 precisam ser true para ser true)

Se caso tiver um !, um && e um || a ordem de excução será primeiro o !, depois o && e depois o ||.

Exemplos:

- idade >= 15 && idade <= 17 // A idade está entre 15 e 17?
- estado == 'RJ' || estado == 'SP' // O estado é RJ ou SP?
- salário > 1500 && sexo != 'M' // O sálário é maior que 1500 e sexo é diferente de masculino?

#### Ordem de precedência

- () ** * / 
- < >
- !
- &&
- ||

### Operador ternário

composto por ? :

- teste ? true : false

- teste - teste lógico
- true - o que acontece se o teste for verdadeiro
- false - o que acontece se o teste for falso
