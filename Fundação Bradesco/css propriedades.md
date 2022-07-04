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