## Layouts Css

### Normal flow

É a maneira que os elementos block e inline ficam na página.

    <p>Texto block com <strong>in line</strong> dentro.</p>

### Table

Os elemtentos ficam em forma de tabela.

    <table>
        <tr><!--introduz linhas -->
            <td>linha 1 coluna1</td>
            <td>linha 1 coluna2</td>
            <td>linha 1 coluna3</td>
        </tr>
    </table>

### tabless

Usa propriedades float e clear para que os elementos possam mudar de posição na tela.

    <div style="float: left">
        esquerda
    </div>

    <div style="float: right">
        direita
    </div>

    <div style="clear: both">
        limpa o float e volta ao normal flow.
    </div>

### Flexbox

A caixa se torna flex, fazendo com que os elementos iternos recebam melhor:

- Ordenação
- Alinhamento
- Tamanhos flexíveis

**HTML**

    <div class="flexbox">
        <div class="item">item A</div>
        <div class="item">item B</div>
        <div class="item">item C</div>
    </div>

**CSS**

    .flexbox{
        display: flex;
    }

### Flex-container, Flex-itens e Nesting

HTML

    <div class="container">
        <div class="item"></div>
        <div class="item"></div>
        <div class="item"></div>
    </div>

**Nesting**

Elementos que vivem dentro de outros elementos.

### Axis - Eixo principal e cruzado

O eixo principal(main), e o eixo cruzado(cross) fica perpendicular a este.

|start-----------------------------------end|

### Flex-sizing

- Flexível
- Altera width/height dos itens para preenchimento dos espaços do flex-container.

## Propriedades do flex-container

- **Direção dos itens**
  - Flex é uma dimensão (horizontal e vertical)
  - podemos mudar a direção com `flex-direction`
  - valores: (row | row-reverse | column | column-reverse)
- **flex-wrap**
  - Podemos usar multi linhas.
  - Cada nova linha, um novo flex container.
- **Flex-flow**
  - Juntamos o flex-direction || flex-wrap
- **Justify-content**
  - Alinhamento dos elementos dentro do `container`, eixo principal.

    Exemplo: CSS

    .container {
        display: flex;

        justify-content: flex-start;

        border: 1px solid red;
    }

    .item {
        border: 1px solid;
    }

  - Distribuição dos elementos.
    - *Valores*
      - flex-start -> No começo.
      - flex-end -> No final.
      - center -> No centro.
      - space-around -> Espaço ao redor.
      - space-between -> Espaço entre.
      - space-evenly -> Espaço constante.
  - **alin-items**
    - Alinhamento dos elementos no eixo cruzado.
      - *Valores*
        - stretch -> Esticados padrão.
        - flex-start -> No começo do eixo cruzado.
        - flex-end -> No final do eixo cruzado.
        - center -> No centro do eixo cruzado.
- **Gap**
  - Espaço entre os elementos.
    - *Valores*
      - unidade de medidas
        - fixas: px, pt
        - flexíveis: %, em, rem

## Propriedades do itens

- **flex-basis**
  - Serve para mudar o tamanho do item.
- **flex-grow**
  - Faz o item crescer e se adaptar automaticamente.
  - O crescimento do item dentro do container em relação aos espaços vazios.
    - *Valores*
      - 0 -> Padrão não altera nada.
      - 1 -> Pega todo o espaço disponível para todos os itens e o divide para cada um deles. E assim por diante para cada número.
- **flex-shrink**
  - Faz o item encurtar ou comprimir.
  - O encolhimento do item dentro do container.
- **flex**
  - shorthand para: flex-basis, flex-grow e flex-shrink.
  - Se adicionarmos os valores o primeiro se refere ao grow, o segundo é o shrink ou o basis se colocarmos unidades de medidas.
- **order**
  - Ordenar elementos.