function tabuada(){
    var num1 = document.getElementById('txtn')
    var tab = document.getElementById('seltab')

    if(num1.value.length == 0){
        window.alert('Por favor, digite um número!')
    } else{
        let numero = Number(num1.value)
        tab.innerHTML = ''

        for (let i = 1; i <= 10; i++){
            let item = document.createElement('option')
            item.text = `${numero} x ${i} = ${numero*i}`
            item.value = `tab${i}`
            tab.appendChild(item)
        }
    }
}