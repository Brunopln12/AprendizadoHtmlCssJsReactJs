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