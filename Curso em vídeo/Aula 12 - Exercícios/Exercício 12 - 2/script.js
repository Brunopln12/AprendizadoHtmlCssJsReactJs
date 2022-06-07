function verificar(){
    var data = new Date()
    var ano = data.getFullYear()
    var fano = document.getElementById('txtano')
    var res = document.querySelector('div#res')
    if (fano.value.length == 0 || fano.value > ano){
        window.alert('[ERRO] Verificar os dados e teste novamente!')
    }else {
        var fsex = document.getElementsByName('radsex')
        var idade = ano - Number(fano.value)
        var genero = ""
        var img = document.createElement('img')
        img.setAttribute('id','foto')
        // verifica o sexo
        if (fsex[0].checked){
            genero = 'Homem'
            // fotos homens
            if(idade >= 0 && idade < 10){
                // Criança
                img.setAttribute('src','./Imagens/criancahc.png')
            } else if (idade < 21){
                //Jovem
                img.setAttribute('src','./Imagens/jovemhc.png')
            } else if (idade < 50){
                //Adulto
                img.setAttribute('src','./Imagens/adultohc.png')
            } else {
                //Idoso
                img.setAttribute('src','./Imagens/velhohc.png')
            }
        }else if (fsex[1].checked){
            genero = 'Mulher'
            // fotos mulher
            if(idade >= 0 && idade < 10){
                // Criança
                img.setAttribute('src','./Imagens/criancamc.png')
            } else if (idade < 21){
                //Jovem
                img.setAttribute('src','./Imagens/jovemmc.png')
            } else if (idade < 50){
                //Adulto
                img.setAttribute('src','./Imagens/adultomc.png')
            } else {
                //Idoso
                img.setAttribute('src','./Imagens/velhomc.png')
            }
        }
        res.style.textAlign = "center"
        res.innerHTML = `Detectamos o gênero ${genero} com idade ${idade}.`
        res.appendChild(img)
    }
}