# Anotações da Aula 09

## Entendendo o DOM

É um acrônimo para Documento Object Model, modelo de obijetos para documentos, conjunto de objetos dentro do navegador para dar acesso ao componentes internos dentro do website.

### Árvore DOM

Começa da raiz que dentro do navegador chamamos de window

dentro do window tem outros objetos como os:

- location - a localização do seu site url página atual.
- document - documento atual
- history - de onde veio e pra onde vai facilita a navegação

dentro de document

- document
    - html
        - head
            - meta
            - title
            - entre outras
        - body
            - h1
            - p
            - p
                - strong
            - div

document e parent de html e o html é child de document

#### Acessando e navegando dentro dos elementos DOM

Métodos para selecionar e/ou acessar os elementos:

- por Marca - tag
    - comando: getElementsByTagName() - consegue selecionar mais de um objeto e/ou elemento.

- por ID
    - comando: getElementById()
    
- por Nome
    - comando: getElementsByName()

- por Classe
    - comando: getElementsbyClassName()

- por Seletor - ss - mais novo
    - comando: querySelector() ou querSelectorAll()