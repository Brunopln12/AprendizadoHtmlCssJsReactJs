let num = [5,8,2,9,3]

console.log(num)

console.log(`Nosso vetor é o ${num}`)

console.log(`O vetor tem ${num.length} posições`)

console.log(`O primeiro valor do vetor é ${num[0]}`)

num.sort()

console.log(num)

num.push(1)

console.log(num)

let valores = [0, 1, 7, 4, 2, 9]

for (let index = 0; index < valores.length; index++) {
    console.log(`A posição ${index} tem o valor ${valores[index]}`)
}

for(let pos in valores){
    console.log(`A posição ${pos} tem o valor ${valores[pos]}`)
}
valores.sort()

console.log(valores)

let posicao = valores.indexOf(3)
if(posicao == -1){
    console.log('O valor não foi encontrado!')
}else{
    console.log(`O valor 9 está na posição ${posicao}`)
}