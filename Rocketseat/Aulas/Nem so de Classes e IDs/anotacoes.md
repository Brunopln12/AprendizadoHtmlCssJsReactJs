## Seletores

**Descrição**

Nessa aula vamos ver um pouco mais sobre seletores no CSS.

### Seletores
Conecta um elemento HTML com o CSS a fim de alterar o elemento.

Tipos:
Element Selector

Todos os elementos HTML
HTML

    <h1>Título da página</h1>
    <p>Conteúdo da minha página</p>

CSS

h1 {
	color: blue;
	font-size: 60px;
}

p {
	color: green;
}
ID Selector

Um elemento que tenha um atributo id
Cada id deverá ser único
Usa-se # para indicar um ID selector
HTML

    <h1 id="title">Título da página</h1>
    <p id="content">Conteúdo da minha página</p>
CSS

#title {
  color: yellow;
}

#content {
	color: orange;
}
Class Selector

Os elementos com atributo class
Podemos ter uma ou mais classes
Usa-se . para indicar um class selector
Todos os elementos com a mesma class são alterados
HTML

    <h1 class="red big">Título da página</h1>
    <p class="red big">Conteúdo da minha página</p>
CSS

.red {
color: red;
}

.big {
	font-size: 3em;
}
Attribute Selector

Um elemento que tenha um atributo específico
HTML

    <h1 title="Algum titlulo">Título da página</h1>
    <p title="Conteúdo da página">Conteúdo da minha página</p>
CSS

[title] {
	color: orange;
}
Pseudo-class Selector

Elementos em um estado específico
HTML

    <h1 class="red big">Título da página</h1>
    <p class="red big">Conteúdo da minha página</p>

CSS

p:hover {
	color: red;
}

h1:hover {
	color: red;
}
Múltiplos
É possível selecionar múltiplos elementos e aplicar alguma regra CSS para todos eles.

Usamos uma separação por vírgulas para isso:

h1, p, .title, .title:hover {
	color: red;
}

## Combinators

### Combinators

Combinadores, pois eles trabalham para buscar e combinar seletores a fim de aplicar uma estilização

Descendant combinator
Identificado por um espaço entre os seletores
Busca um elemento dentro de outro, mesmo que existam outros elementos no caminho
HTML

    <body>
        <article>
            <h2>Um Título</h2>
        </article>
    </body>
CSS

body article h2 {
	color: red;
}

### Child combinator

Identificado pelo sinal > entre dois seletores
seleciona somente o elemento que é filho direto do pai
Elementos depois do filho direto serão desconsiderados
HTML

    <body>
    <ul>
        <li>Item 1</li>
        <ul>
            <li>Item 2</li>
        </ul>
    </ul>
    </body>
    
body > ul > li {
	color: blue;
}

### Adjacent sibling combinator

Identificado pelo sinal + entre dois seletores
Seleciona somente o elemento do lado direito que é irmão direto na hierarquia
HTML

    <h1>
        Título
    </h1>
    <p>
        Esse é um parágrafo
    </p>
    <p>
        Mais um parágrafo
    </p>

CSS

h1 + p {
	color: red;
}

### General sibling combinator

Identificado pelo sinal ~ entre dois seletores
Seleciona todos os elementos irmãos
HTML

    <h1>
        Título
    </h1>
    <p>
        Esse é um parágrafo
    </p>
    <p>
        Mais um parágrafo
    </p>

CSS

h1 ~ p {
	color: red;
}

## Pseudo-classes

**Descrição**

É um tipo de seletor que irá selecionar um elemento que estiver em um estado específico.

Exemplo: É o primeiro elemento dentro de uma caixa, ou, o elemento está com o ponteiro do mouse sobre ele.

Pseudo-classes começam com 2 pontos seguido do nome da pseudo class :pseudo-class-name

### first-child

:first-child

É quando queremos selecionar o primeiro filho de um grupo de elementos.

HTML

    <ul>
        <li>Gratidão</li>
        <li>Esperança</li>
        <li>Fé</li>
    </ul>
  
CSS

ul li:first-child {
  font-weight: bold;
}

### nth-of-type

:nth-of-type()

Pega o elemento por tipo e posição

HTML

    <ul>
        <h3>Palavras bonitas</h3>
        <li>Gratidão</li>
        <li>Esperança</li>
        <li>Fé</li>
    </ul>

CSS

ul li:nth-of-type(1) {
  font-weight: bold;
}

### nth-child
:nth-child()

É quando queremos selecionar o primeiro filho de um grupo de elementos.

HTML

    <ul>
            <h3>Palavras bonitas</h3>
        <li>Gratidão</li>
        <li>Esperança</li>
        <li>Fé</li>
    </ul>
CSS

ul li:nth-child(2) {
  font-weight: bold;
}

### nth-child odd e even

:nth-child(odd) e :nth-child(even)

even - números pares

odd - números ímpares

HTML

    <ul>
        <li>Gratidão</li>
        <li>Esperança</li>
        <li>Fé</li>
        <li>Liberdade</li>
    </ul>
CSS

ul li:nth-child(odd) {
  color: gray;
}

### hover e focus

**Descrição**

Ações do usuário

Algumas estilos só são aplicados quando o usuário faz alguma ação na página.

*:hover*

a:hover {
  color: red;
}

Vai mudar a cor do link para vermelho quando o usuário passar o mouse sobre o link

*:focus* é aplicado quando o elemento recebe o foco da ação do usuário que pode ser feita utilizando o teclado ou clicando no elemento com o mouse. É comumente usado em campos de input como uma forma de mostrar qual o input "ativo".

input:focus {
  border-color: red;
}

Também podemos usar atributos para selecionar elementos no CSS

Atributos

:disabled

HTML

    <input type="text" disabled>
CSS

input:disabled {
  background-color: green;
}

:required

HTML

    <input type="text" required>
CSS

input:required {
  background-color: red;
}

**Referência**

https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-classes

## Pseudo-elements

**Descrição**

Pseudo-elements

Com pseudo-elements nós podemos adicionar elementos HTML pelo próprio CSS

::pseudo-element-name

💻 Exemplos

::before adiciona um pseudo-elemento antes do elemento selecionado.

HTML

    <ul>
        <li>Gratidão</li>
        <li>Esperança</li>
        <li>Fé</li>
        <li>Liberdade</li>
    </ul>
CSS

li::before {
  content: "> "
}

::after adiciona um pseudo-elemento depois do elemento selecionado.

li::after{
  content: ";"
}

Tanto para o ::before quanto para o ::after é preciso adicionar o content, mesmo que ele seja vazio content = "";

::first-line pega a primeira linha de um texto.

p::first-line {
	font-weight: bold;
}

**Referência**

https://developer.mozilla.org/en-US/docs/Web/CSS/Pseudo-elements