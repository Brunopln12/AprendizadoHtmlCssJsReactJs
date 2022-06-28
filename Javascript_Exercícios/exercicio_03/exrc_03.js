function verificar(){
    let nome = document.querySelector('#nome')
    let senha = document.querySelector('#senha')
// Verifica se os inputs estão vazios
    if(nome.value.length == 0 || senha.value.length == 0){
        window.alert('Valores não preenchidos!')
    }else if (nome.value === senha.value) {
        window.alert(`São iguais! \u{1F631}`)
    } else {
        window.alert(`Os valores não coincidem \u{1F62C}`)
    }
}