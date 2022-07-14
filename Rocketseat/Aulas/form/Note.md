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

- action -> Específica o URL do script que processará os dados e para onde será enviado.

- method -> Específica a maneira de envio de dados para o servidor *web*, para que sejam processados.

    - post -> O navegador enviará diretamente o fluxo de dados para o *script CGI* no servidor web. É mais utilizado, por que permite uma maior transmissão de dados ao servidor.

    - get -> O fluxo de dados será anexado à *URL* especificada no atributo ***Action*** e enviado ao servidor como uma única *URL*.
    O valor do *get* é utilizado para respostas únicas, como uma string de texto.

Sintaxe:
<form action="malito:endereco@eletronico.com.br" method="get" ou method="post">

## Inserir campos de entrada de dados

Para permitir a entrada de dados em um formulário nós utilizamos a *Tag <input>*

**Atributos da tag <input>**

- type -> Tipo de controle a ser criado.

    - image -> Especificado no SRC.

    - button -> Cria um botão.

    - radio -> Cria um botão de escolha única.

    - file -> Cria um controle de seleção de arquivo. Deve ser configurado como o nome do arquivo. Para envio de arquivos o form tem que ter o method do tipo *POST* e (enctype='multipart/form-data")
        - value -> Contém o arquivo a ser enviado.
        - accept -> Descreve que tipos de arquivos serão aceitos.
            - Exemplos:
                .doc, .docx, .pdf, audio/*, image/png, .png, ...
        - files
            - A lista de aquivo ou arquivos.
        - multiple
            - Permite o envio de múltiplos arquivos.
        

    - submit -> Cria um botão de enviar.

    - text ->  Cria um campo de texto.

    - checkbox -> Cria uma caixa de seleção.

    - reset -> Cria um botão que limpa todos os campos.

    - password -> Cria um campo texto sem exibir o que está sendo digitado.

    - hidden -> cria um contorle oculto.

    - search -> Para procurar textos dentro do nosso site.
        - aria-label

- value -> Especifica o valor inicial do controle. É opicional. Exceções: *radio* ou *checkbox*.

- name -> Nomeia cada campo do formulário para o que o script possa manipular os dados.

- maxlenght -> Utilizado em *text* e *password*, estabelece o número máximo de caracteres. Padrão ilimitado.

- src -> Quando o atríbuto *type* for "image" este atríbuto dá a localização e estiliza o botão enviar.

- checked -> Quando o atríbuto *type* for *radio* ou *checkbox* ele especifica que o botão está selecionado.

- size -> Especifica o tamanho inicial do controle, a largura é dada em *pixels* com exceção do *text* ou *password* que nesse caso será em relação ao número de caracteres.

- placeholer -> Coloca um texto de aviso dentro do input. (password, search, tel, text, url, email). Quase todos.

- required -> O input se torna obrigatório para enviar o formulário.

- title -> Coloca um aviso quando o mouse é descansado sobre o campo. E para dar avisos ao usuário.

spellcheck -> Habilita a veirificação ortográfica para este input.

- pattern
    - password
        - Expressão regular para validar o que está sendo digitado no campo.
        - Altamente recomendado o uso de um padrão de segurança alta de senhas.
        - Exemplo:
            - Queremos que a senha contenha caracteres hexadecimais com o limite de no mínimo 4 e no máximo 8 caracteres.
                * pattern="[0-9a-fA-F]{4,8}"

    - email
        - Exemplo:
            - O usuário só poderá colocar email do domínio rocketseat.com.br
                * pattern=".+@rocketseat\.com\.br".

    - url
        - Exemplo:
            - O usuário só poderá colocar domínio.com.br
                * pattern=".*\.com\.br\/.*"

- aoutocomplete
    - Exemplos:
        * on: Permite a sugestão de: new-password ou current-password.
        * off: Desabilita a opção de autocompletar.
        * new-password: O navegador poderá sugerir uma nova senha.

- inputmode
    - Poderá alterar o uso do teclado em smartphones
        - Exemplos:
            Queremos que o cliente só adicione números:
                *inputmode="numeric"           

## Inserir lista e menus de opções

Se caso precisar mostrar várias opções para o usuário.

**Atributos da Tag <select></select>**

- multiple -> Exibe a lista sempre aberta.
- name -> identifica a lista.
- option -> Cria cada item da lista.
    - selected -> Valor padrão da lista.
    - value -> Valor que será retornado.
- optgroup -> Faz um agrupamento do meus options dentro do select. 

## Agrupando as informações <fieldset>

- Agrupamento de campos
- Mesmo propósito
- Semântico
- Acessibilidade

**Atributos especiais**

- disabled
    - Desabilitar todos os elementos internos.
    - Não serão enviados ao submeter o formulário.

- form
    - O id de um formulário ao qual esse fieldset pertence
    - Não precisa estar dentro do formulário.

- name
    - Nome do grupo.

- <legend>
    - nome do agrupamento
    - primeiro elemento dentro do fieldset

## Identificando as tags de entrada <label>

- Associar e identificar uma (ou mais) tag de entrada de dados.
- Acessibilidade.
- Você poderá clicar para mudar o foco da entrada de dados.

**Atributos**

- for
    - Para fazer a conexão entre este label e a tag de entrada de dados.
    - É feita via id do input.
    - Só funciona com elementos específicos.
        - button, input (not hidden), meter, output, prodress, select, textarea

## Colocando botões <button>

- Representa um botão.
- Usado para enviar formulários.
- É estilizado pelo user agent. Navegador.

**Atributos comuns**

- type
    - submit
    - reset
    - button

- autofocus
- disabled
- name
- value
- form

## Dando uma lista de sugestões para um input <datalist>

- Lista de valores como sugestão a uma tag <input>.
- Valores sugestivos e não obrigatórios.
- Usuário poderão selecionar um dos valores, ou colocar um valor diferente da sugestão.
- Colocar um id para ser usado com a list.

<list>

- Recebe como o valor o id de um <datalist> residente no mesmo documento.

**Tipos de inputs suportados**

- text, search, url, tel, email, date, month, week, time, datetime-local, number, range e color.

* Valores de datalist que não são compatíveis com o tipo do <input> não serão apresentados.

**Tipos de input não suportados (conforme especificação)**

- hidden, password, checkbox, radio, file, ou qualquer tipo de button.