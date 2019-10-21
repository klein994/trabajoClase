var lista = document.getElementById("main-ul");

var botonMostrarLista = document.getElementById("show-list");

botonMostrarLista.addEventListener("click", function() {
    lista.classList.toggle("active");

})