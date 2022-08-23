# DOM (Document Object Model)

- É o HTML convertido para um Objeto JavaScript.
- API que representa e interage com o HTML.
- Estrutura de dados do tipo de árvore, criada pelo browser.
- Propriedade e métodos.

## Para que serve?

- JavaScript usa a DOM para se conectar ao HTML.
- Manipular o HTML com o JavaScript.
- Você só programa pra WEB porque existe a DOM.

## Selecionando Elementos

Ver aulas do curso em vídeo.

getElementById (element)

getElementsByClassName (HTML collection)

getElementByTagName (HTML collection)

querySelector (element)

querySelectorAll (Node List)

**innerHTML**

Utilizado na manipulação do DOM, o innerHTML retorna todo o texto e o html que existem no elemento. Ele retorna todo o html existente, retornando também às tags, e não somente o texto.

**innerText**

Já o innerText retorna apenas o texto. Ele ignora todas as tags HTML que estão dentro do elemento, mas ainda assim, “entende” o css do elemento, retornando apenas textos visíveis. Utiliza-se quando queremos buscar apenas o texto visível disponível no elemento.

**textContent**

O textContent funciona de forma muito semelhante ao innerText, porém, retornando todo o conteúdo de texto, incluindo o texto oculto pelo css, bem como as quebras de linha (\n). Utilizamos o textContent quando queremos buscar todo o texto disponível no elemento.

**Object.values()**

O método Object.values() retorna um array com os valores das propriedades de um dado objeto, na mesma ordem provida pelo for...in laço (sendo a diferença que o laço for-in também enumera as propriedades na cadeia prototype).

### Manipulando Atributos

**setAttribute()**
A utilização deste método é bem simples, basta informar dois parâmetros de entrada (strings), o primeiro referente ao nome do atributo HTML que deseja adicionar à tag e o segundo referente ao valor do atributo.

Script

    document.getElementById("cfb").setAttribute("class","txth1");
    document.getElementById("cfb").setAttribute("style","background-color:#AAA;");

**removeAttribute()**

De forma contrária ao conteúdo anterior, nós podemos remover atributos das tags html

## Manipulando Estilos e Classes

**style**

.style.QualquerPropriedadeCssEmCamelCase = valorDaPropriedade

**classList**

O Element.classList é uma propriedade somente leitura que retorna uma coleção DOMTokenList (en-US) ativa dos atributos de classe do elemento.

Usar classList é uma alternativa conveniente para acessar a lista de classes de um elemento como uma seqüência delimitada por espaço através de element.className.

**Sintaxe**

const elementClasses = elementNodeReference.classList; elementClasses é um DOMTokenList que representa o atributo de classe de elementNodeReference. Se o atributo de classe não foi definido ou está vazio elementClasses.length retorna 0. element.classList propriamente dito é somente leitura, embora você possa modificá-lo usando os métodos add () e remove ().

**Métodos**

add( String [, String] )

Adicione valores de classe especificados. Se essas classes já existem no atributo do elemento, elas são ignoradas.

remove( String [,String] )

Remover valores de classe específicos.

item ( Number )

Retorna o valor da classe por índice na coleção.

toggle ( String [, force] )

Quando apenas um argumento está presente: Toggle class value; Ou seja, se a classe existir, em seguida, removê-lo e retornar false, se não, então adicioná-lo e retornar true.
Quando um segundo argumento está presente: Se o segundo argumento é avaliado como true, adicione o valor especificado da classe e, se ele for avaliado como false, remova-o.

contains( String )

Verifica se o valor da classe especificado existe no atributo de classe do elemento.

## Navegando pelos Elementos

**Parent**

parentNode = Nó pai

parentElement = Elemento pai

**Child**

childNodes - nodeList

children - HTML collection

firstChild - Leva em consideração os espaços vazios

firstElementChild - Não leva em consideração os espaços vazios

lastChild - Leva em consideração os espaços vazios

lastElementChild - Não leva em consideração os espaços vazios


**Navegar pelos irmãos**

nextSibling - Leva em consideração os espaços vazios

nextElementSibling - Não leva em consideração os espaços vazios

previousSibling -  - Leva em consideração os espaços vazios

previousElementSibling - - Não leva em consideração os espaços vazios

## Criando e adicionando Elementos na página

createElement - Cria um elemento para adiconar.

append - Adiciona o elemento criado no final do elemento pai.

preppend - Adiciona no início do elemento pai.

insertBefore - É colocado antes do elemento colocado como nó de referência.

    element.insertBefore(div, script)

## Eventos

**Adicionando Eventos Via Js**

element.addEventListener - Emplilha as funções.

    element.addEventListener ('nomeDoEvento', 'functionASerExecutada') 
    element.addEventListener('click', prinf)

element.onclick - Pega somente a última função passada.

**Argumento Event**

event - Objeto interno do JavaScript que podemos utilizar para fazer várias funcionalidades.