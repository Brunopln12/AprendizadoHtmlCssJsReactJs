/* 
    ∞ Buscando e contando dados em Arrays ∞
    Baseado no Array de Livros por Categoria abaixo, faça os seguintes desafios
        • Contar o número de categorias e o número de livros em cada categoria
        • Contar o número de autores
        • Mostrar livros do autor Auguto Cury
        • Transformar a função acima em uma função que irá receber o nome do autor e devolver os livros desse autor.
*/

const booksByCategory = [
    {
        category: "Riqueza",
        books: [
            {
                title: "Os segredos da mente milionária",
                author: "T. Harv Eker",
            },
            {
                title: "O homem mais rico da Babilônia",
                author: "George S. Clason",
            },
            {
                title: "Pai rico, pai pobre",
                author: "Robert T. Kiyosaki e Sharon L. Lechter",
            },
        ],
    },
    {
        category: "Inteligência Emocional",
        books: [
            {
                title: "Você é Insubstituível",
                author: "Augusto Cury",
            },
            {
                title: "Ansiedade – Como enfrentar o mal do século",
                author: "Augusto Cury",
            },
            {
                title: "Os 7 hábitos das pessoas altamente eficazes",
                author: "Stephen R. Covey",
            },
        ],
    },
];

// Contar o número de categorias
const numberCategories = booksByCategory.length

console.log(`O número de categorias é: ${numberCategories}`)

// Número de livros em cada categoria

for (const category of booksByCategory) {
    console.log(`Número de livros na categoria ${category.category} é: ${category.books.length}`)
}

// Contar o número de autores

function countAuthors() {
    let authors = [];
    
    for (const category of booksByCategory) {
        for (const books of category.books) {
            if(authors.indexOf(books.author)== -1){
                authors.push(books.author)
            }
        }
    }
    console.log(`Total de autores é: ${authors.length}`)
}

countAuthors();

// Mostrar livros do autor Auguto Cury

function booksOfAugustoCury() {
    let book = [];
    
    for (const category of booksByCategory) {
        for (const books of category.books) {
            if(books.author === "Augusto Cury"){
                book.push(books.title)
            }
        }
    }
    console.log(`Livros do autor Augusto Cury é: ${book.join(", ")}`)
}

booksOfAugustoCury()

// Transformar a função acima em uma função que irá receber o nome do autor e devolver os livros desse autor.

function booksOfAuthor(author) {
    let book = [];
    
    for (const category of booksByCategory) {
        for (const books of category.books) {
            if(books.author === author){
                book.push(books.title)
            }
        }
    }
    console.log(`Livros do autor ${author} é: ${book.join(", ")}`)
}

booksOfAuthor("George S. Clason")
