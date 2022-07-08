# Criando e formatando frames      OBS: Não é utilizada no html:5

**Frames: o que são e para que servem**

Os frames são utilizados para dividir a janela do navegador em diferentes partes, e cada uma delas pode ser atualizada separadamente, pois carrega um documento HTML diferente.

Frames são como moldes onde as páginas web são obrigadas a se encaixar.

Frameset é o arquivo que define a estrutura e a distribuição dos frames do site.

a tag <frameset> vai dentro da tag <body>

## A tag <framesets> e seus atributos

**Atributos**

- cols -> Define a largura dos frames. 
    Podem ser especificados em pixels ou porcentagem.
- rows -> Define a altura dos frames.
    Podem ser especificados em pixels ou porcentagem.
- src -> Especifica a *URL* que você deseja carregar em um frame.
- marginwidth -> Margem direita e esquerda em pixels.
- marginheight -> Margem superior e inferior
- scrolling -> Adiciona uma barra de rolagem em um frame.
- noresize -> Impede que o usuário redimensione um frame.

## A tag <frame> e seus atríbutos

**Atributos**

- marginwidth -> Margem direita e esquerda em pixels.
- marginheight -> Margem superior e inferior
- scrolling -> Adiciona uma barra de rolagem em um frame.
- noresize -> Impede que o usuário redimensione um frame.
- name -> Especifica nomes para os frames.

## Criando *links* com destinos em frames

Para apontar *frames*, ou seja, direcionar o link para abrir no frame desejado.
Assim podemos manter o conteúdo de um emquanto carregamos a página web de outros.
O frame em que o contéudo permanece constante é chamado de estático e o outro, no qual o conteúdo muda é chamado de dinâmico.

Para apontar os frames precisamos do atributo *name* com a tag <frame>

Para isto usamos o atributo target.

**Sintaxe**

<a href="URL" target="nome_frame">

- _blank -> Abre o link em uma nova janela.
- _self -> Abre o link no mesmo frame.
- _parent -> Carrega a página no frame principal.
- _top -> Carrega a página no frame mais alto da página.