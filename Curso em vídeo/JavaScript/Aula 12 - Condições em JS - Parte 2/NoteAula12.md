# Anotações da Aula 12

## Condições em JavaScript

### Sequências

Executar um comando atrás do outro

### Condições

Dependendo de alguma situação eu executo um comando ou o outro

#### Condições Aninhadas

Condições dentro de outras condições

if (cond){
    bloco 1
} else{
    if(cond2){
        bloco 2
    }else{
        bloco 3
    }
}

##### Como pegar a hora atual do sistema

var nomedavariavel = new Date()
var hora = nomedavariavel.gethours() - pega a hora do sistema.


#### Condição Múltipla

Serve para valores fixos pode ser testado vários valores.

switch (expressão) {
    case valor 1:
    
    break;

    case valor 2:

    break;

    case valor 3:

    break;

    default:

    break;
}