var lista = document.getElementById("main-ul");
var lista2 = document.getElementById("overlayMobile");
var menu = document.getElementById("show-list");


menu.addEventListener("click", function() {
    lista.classList.toggle("active");
    lista2.classList.toggle("active");
})
lista2.addEventListener("click", function() {
    lista.classList.toggle("active");
    lista2.classList.toggle("active");
})