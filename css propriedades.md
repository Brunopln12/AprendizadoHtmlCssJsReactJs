# Css - principais propriedades #

Sintaxe do css:

p {
	color: red;
}


- color - muda a cor do texto
- background-color - muda a cor de fundo
- background-image: url('image.gif'); - coloca uma imagem no fundo
- background-repeat: repeat-x horizontal, repeat-y vertical, no-repeat; - estabelece uma forma especifica de repetição
- background-attachment: scroll rola com a página, fixed não rola; - estabelece se o plano de fundo é fixo ou se ele rola com a página
-  background-position - permite especificar o posicionamento da imagem de fundo
-  text-aling - alinhamento horizontal do texto
-  text-decoration - adicionar ou remover decorações
-  text-transform - transformar o texto em caixa alta...
-  text-indent - coloca um recuo na primeira linha
-  font-family - escolhe o tipo da fonte se colocar maus de uma ela vai na primeira se não tiver ela segue para a próxima
-  font-style - muda o estilo da fonte (oblique - oblíquo)
-  font-size - muda o tamanho da letra
-  links 
a:link; - não visitados
a:visited; - já visitados
a:hover; - ao passar o mouse sobre os links
a:active; - ativos     

classes no css são identificadas pelos ponto.
.nomeDaClasse {
	color: "red";
}

id no css é identificado pelo sustenido.
#nomeDoId{
	color: "blue";
}

float - permite que o elemento flutue na página só pode ser declarada de 3 formar right left e none 
#imagem{
	float: left;
	width: 100px;
}

clear - é utilizado junto com float e serve para os elementos que os seguem.

/* comentários css */

@import -> importa estilos de css dentro da tag style ou do documento css que você desejar.

**Cascata**

Origem do estilo -> inline, tag style, tag link.

Especifidade -> Cálculo matemático, onde, cada tipo de seletor e origem, possuem valores a serem considerados.

Importância -> !important não é uma boa prática mas ele sobrescreve todos os outros elementos e dá a maior importância para aquele que foi definido assim.

**At-rules**

Está relacionado ao comportamento do css.
começa com o sinal de *@* seguido de identofocador de valor.

*Exemplos:*

- @import -> Incluir um css externo.
- @media -> Regras condicionais para dispositivos.
- @font-face -> Fontes externas.
- @keyframes -> Animation, animações.

**Shorthand**

Colocar propriedades no css de forma unida, resumida e legível.

A ordem que são colocadas as propriedades não importa.

**Funções**

Nome seguido de abre e fecha parentesis.
Recebe argumentos

**Vendor Prefixes**

Permite que o browser adicione `fetures` a fim de colocar em uso alguma novidade que vemos no css.

**Medidas**

Mais utilizadas, px, rem, em, %.

**Strings:** 

texto envolto em aspas

.box::after {
	content: "Isso é uma string"
}


Identificadores: podemos ter nomes de cores como red, black, gold

Nessa aula vamos entender sobre distâncias absolutas e relativas.

Distâncias absolutas <length>
São fixas e não alteram seu valor.

| Unidade  | Nome                | Equivalência         |
|----------|---------------------|----------------------|
| cm       | Centímetros         | 1cm = 96px/2.54      | 
| in       | Inches (polegadas)  | 1in = 2.54cm = 96px  | 
| px       | Pixels              | 1px = 1/96th of 1in  |
*o mais comum e mais utilizado é o px

*não é recomendado usar cm

Distâncias relativas
São relativas a um outro valor, pode ser o elemento pai, ou root, ou o tamanho da tela.
Benefício: Maior adaptação aos diferentes tipos de tela.
| Unidade  | Relativo a                                    |
|----------|-----------------------------------------------|
| em       | Tamanho da font do elemento pai               |
| rem      | Tamanho da font do elemento raiz (root/html)  | 
| vw       | 1% da viewport wid                            |  
| vh       | 1% da viewport height                         |
Normalmente o tamanho da font padrão do navegador é de 16px e para mudar esse valor temos que fazer a alteração no root ou no elemento html.
:root {
	font-size: 18px;
}

/* OU */

html {
	font-size: 18px;
}
O viewport é a parte da tela que está sendo exibida. No caso dos navegadores web, é o que é exibido na janela/tela do documento. Conteúdos que estão fora do viewport só serão exibidos quando feito um scroll da área de visualização.