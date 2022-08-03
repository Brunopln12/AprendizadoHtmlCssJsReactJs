const object = [
    {
        nome: "Bruno",
        idade: 30,
        detalhes_da_profissao:{
            esta_trabalhando: true,
            empresa: "Empresa X",
        },
        hobbies: ["Programar", "Pedalar", "Assistir"],
    }
]

console.log(object)

// JSON
// Converter objeto para json

const jsonData = JSON.stringify(object)

console.log(jsonData)

// converter json para objetos

const objData = JSON.parse(jsonData)

console.log(objData)

objData.map((nome)=>{
    console.log(nome.nome)
})