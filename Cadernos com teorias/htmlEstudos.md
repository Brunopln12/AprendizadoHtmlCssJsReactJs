# HTML - Estudos #

**Efeito Negrito**
Sintaxe: <b>Texto</b>

*Efeito Itálico*
Sintaxe: <i>Texto</i>

Efeito Sublinhado
Sintaxe: <u>Texto</u>

## Sintaxe das tags e suas explicações ##

<p>Texto</p> -> Tag para começar um parágrafo.

<hr> -> Insere uma linha horizontal.

<!-- comentário --> -> Insere um comentário.

<pre>Texto</pre> - Exibe o texto conforme digitamos.

<img src="localDaImagem" alt="descriçãoParaImagem"> - utilizada para adicionar imagens.

**Tag <a>**

<a href="url">Texto descritivo</a> - utilizada para colocar um link de uma nova página.

<a href="#nomeDaSeção">Texto Descritivo</a> 

<a id="nomeDaSeção"> - utilizada para criar links de seção.

<a href="url"><img src="localDaImagem" alt="descriçãoParaImagem"></a> - utilizada para colocar um link em uma imagem.

URL -> Absoluto e relativo.
    - Absoluto -> Inclui todo o protocolo e nome de domínio
    - Relativo -> relativo a página aberta no momento.

*Atributos da tag <a>*

- href -> Colocamos a referência para o link.

- download -> Se quisermos baixar este link, utilizado geralmente com imagens.

- target -> Qual o alvo do click.
    - _self -> Abre na mesma guia web, padrão.
    - _blank -> Abre em uma nova guia.

<map> - usada para mapear uma imagem

<area> - define o tipo de forma que será usado

Atributos de cor para links:
- link="cor" - especifica a cor dos links não acessados da página web
- vlink="cor" - após ser acessado
- alink="cor" - quando o mouse estiver sobre o link

**Tags de listas <u> <o>**

<u> <li> </u> - lista não ordenada

<o> <li> </li> - lista ordenada

Atributos para tag img
- usemap - Demonstra que será utilizado um mapa na imagem

**Tabelas**

<table> -> Adiciona uma tabela no html.
<caption> -> Define o que nossa tabela está fazendo.
<thead> -> Aonde colocamos os dados de cabeçalho da nossa tabela.
<tr> -> Adiciona linhas a nossa tabela.
<th> -> Adiciona uma coluna de título a nossa tabela.
<tbody> -> Aonde colocamos os dados de corpo da nossa tabela.
<td> -> Adiciona uma coluna a nossa tabela.
<tfoot> -> Onde fica o rodapé da nossa tabela.
<colgroup> -> Agrupa as colunas.

*Atributos*

rowspan -> mescla linhas.
colspan -> mescla colunas.
span -> para referenciar quantas colunas eu desejo agrupar.
scope -> Define se o item é uma linha ou coluna. (col ou row).