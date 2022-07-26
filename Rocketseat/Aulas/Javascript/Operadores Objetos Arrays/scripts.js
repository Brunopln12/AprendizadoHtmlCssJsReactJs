// Exercícios

const person = {
    name: "João",
    age: 34,
    stars: 3.6,
    isSuscribed: true
}

let student = {
    name: "Maria",
    age: 13,
    weight: 54.6
}

const jonh = {
    name: "jonh",
    age: 18,
    weight: 78.4
}

//console.log(`${student.name} de idade ${student.age} pesa ${student.weight} kg`)

let students =[
    student
]

students[1] = jonh

console.log(students)