function carregar(){
    var msg = window.document.getElementById('msg')
    var img = document.getElementById('imagem')
    var data = new Date()
    var hora = data.getHours()
    msg.innerHTML = `Agora são ${hora} horas.`
    if (hora >= 0 && hora < 12) {
        // Bom dia!!
        img.src = "../Exercício 12/Imagens/Novo Projeto manha.png"
        document.body.style.background = '#FFC234'
    } else if (hora >= 12 && hora <= 18) {
        // Boa tarde!!
        img.src = "../Exercício 12/Imagens/Novo Projeto tarde.png"
        document.body.style.background = '#E87000'
    } else {
        //Boa noite!!!
        img.src = "../Exercício 12/Imagens/Novo Projeto.png"
        document.body.style.background = '#3A22F0'
    }
}
