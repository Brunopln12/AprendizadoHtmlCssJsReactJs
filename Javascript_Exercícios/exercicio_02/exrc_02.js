function enviar(){
    let result = document.querySelector('div#result')
    let number = document.querySelector('#number')
    
// verifica se o campo foi preenchido
    if (number.value.length == 0) {
        window.alert('Deve preencher um valor!')
    }
// verifica se o número é menor que 0 ou maior que 10
    while (number.value < 0 || number.value > 10) {
        window.alert('O valor digitado deve ser entre 0 e 10, por favor digite um número válido')
        // limpa o capmo do input number
        document.getElementById('number').value = ''     
    }

    let valueNumber = Number(number.value)
    
    result.innerHTML = `O valor digitado é: ${valueNumber}`
}
