# Criando e formatando formulários

## Criar um formulário

**O que é um formulário?**
Um questionário que permite ao usuário participar de uma pesquisa, se cadastrar em sites diversos, entrar em contato para esclarecer dúvidas, realizar compras, etc.

Os dados recebidos pelos formulários são processados pelos scripts de processamento.

**Tag Form**
Sintaxe: 
<form atributos>
    (conteúdo do formulário)
</form>

**Atributos**

- action -> Específica o URL do script que processará os dados
- method -> Específica a maneira de envio de dados para o servidor *web*, para que sejam processados.
    - post -> O navegador enviará diretamente o fluxo de dados para o *script CGI* no servidor web. É mais utilizado, por que permite uma maior transmissão de dados ao servidor.
    - get -> O fluxo de dados será anexado à *URL* especificada no atributo ***Action*** e enviado ao servidor como uma única *URL*.
    O valor do *get* é utilizado para respostas únicas, como uma string de texto.

Sintaxe:
<form action="malito:endereco@eletronico.com.br" method="get" ou method="post">

## Inserir campos de entrada de dados

Para permitir a entrada de dados em um formulário nós utilizamos a *Tag <input>*

**Atributos da tago <input>**

- type -> Tipo de controle a ser criado.
    - image -> Especificado no SRC.
    - button -> Cria um botão.
    - radio -> Cria um botão de escolha única.
    - file -> Cria um controle de seleção de arquivo. Deve ser configurado como o nome do arquivo.
    - submit -> Cria um botão de enviar.
    - text ->  Cria um campo de texto.
    - checkbox -> Cria uma caixa de seleção.
    - reset -> Cria um botão que limpa todos os campos.
    - password -> Cria um campo texto sem exibir o que está sendo digitado.
    - hidden -> cria um contorle oculto.
- value -> Especifica o valor inicial do controle. É opicional. Exceções: *radio* ou *checkbox*
- name -> Nomeia cada campo do formulário para o que o script possa manipular os dados.
- maxlenght -> Utilizado em *text* e *password*, estabelece o número máximo de caracteres. Padrão ilimitado.
- src -> Quando o atríbuto *type* for "image" este atríbuto dá a localização e estiliza o botão enviar.
- checked -> Quando o atríbuto *type* for *radio* ou *checkbox* ele especifica que o botão está selecionado.
- size -> Especifica o tamanho inicial do controle, a largura é dada em *pixels* com exceção do *text* ou *password* que nesse caso será em relação ao número de caracteres.

## Inserir lista e menus de opções

Se caso precisar mostrar várias opções para o usuário.

**Atributos da Tag <select></select>**

- multiple -> Exibe a lista sempre aberta.
- name -> identifica a lista.
- option -> Cria cada item da lista.
    - selected -> Valor padrão da lista.
    - value -> Valor que será retornado.

## Inserir botões e caixas de opções