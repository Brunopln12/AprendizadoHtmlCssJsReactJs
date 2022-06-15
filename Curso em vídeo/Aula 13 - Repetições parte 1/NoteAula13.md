# Anotações da Aula 13

## Repetições em JavaScript

Laços ou iterações

Exemplo:

function comerPizza (){
    comerFatia()
    comerFatia()
    comerFatia()
    comerFatia()
    comerFatia()
    comerFatia()
    comerFatia()
    comerFatia()
}

### Estruturas de comtrole

Sequência - Execução de passos em seguida

Condições - Execução de passos de acordo com se a comparação seja verdadeira ou falsa (se)

Repetições - laços, (loop) enquato a condição for verdadeira ele executa o comando. (enquanto)

#### Forma de escrever a repetição em javascript

##### while - executa o teste no Início

while (condição){
    função executada
}

function comerPizza(){
    while(temFatia()){
        comerFatia()
    }
}

#####  do ... while primeiro executa o bloco e depois ele testa no final

do{

}while(condição)