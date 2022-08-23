const OpenModal = document.getElementById('openModal')

const modal = OpenModal.nextElementSibling

OpenModal.addEventListener("click", abrir)

function abrir () {
    console.log(modal.classList.remove('invisible'))
}
// Adicionamos a toda tela o evento keydown e especificamos que somente a tecla esc for usada para sair do modal
document.addEventListener('keydown', function (event) {
    const isEscKey = event.key === 'Escape'

    if(isEscKey){
        modal.classList.add('invisible')
    }
})