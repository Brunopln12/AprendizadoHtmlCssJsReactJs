# Anotações da Aula 16

## Funções aprofundamento 

Para uma função acontecer ela tem que ter uma chamada, parâmetros, ação e retorno. Nem sempre terá parâmetros e retorno.

### Definição técnica

Ações são executadas assim que são chamadas ou em decorrência de algum evento.

Funções podem receber parâmetros e retornar um resultado.

Evento onclick - cliclar em um botão

### Sintaxe da função

O que está dentro de dos parenteses são os parâmentros

function ação(param){
    return res
}

chamada da função - ação(5)

Exemplo:

Verificar se uma função é par ou impar?

function parimp(n){
    if(n%2==0){
        return 'par'
    }else{
        return 'ímpar'
    }
}

let res = parimp(11)