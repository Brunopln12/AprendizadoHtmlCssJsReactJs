/*

Modificando textos dentro do Html com JQuerry!


$(document).ready(function () {
    $("p.p-yellow").html("Inserido com JQuerry");
    $("#botao").click(function () { 
        alert("Escondeu os paragráfos!!");
        $("p").hide();        
    });
    $("#teste").click(function () { 
        $(this).html("Mudou!!!");
        
    });
});

*/

/* 
Utilizado quando o mouse entrar e sair da seletor

$(document).ready(function () {
    $("#botao").hover(function () {
            // over
            $(this).text("Mouse Entrou!!!")
        }, function () {
            // out
            $(this).text("Mouse Saiu!!!")
        }
    );
});

*/
$(document).ready(function () {
$("#botao").on({
    mouseenter: function(){
        $(this).text("Mouse entrou no botão!")
    },
    mouseleave: function(){
        $(this).text("Clique Aqui!")
    },
    click: function(){
        $(this).css("background-color", "#5CA45E")
    }
});
    $("p.p-yellow").width("3");
});