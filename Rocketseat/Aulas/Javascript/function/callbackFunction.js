function sayMyName(name) {
    console.log("Antes de executar uma callback")
    name()
    console.log("Depois de executar a callback")
}

sayMyName(
    () => {
        console.log("Estou em uma callback")
    }
)