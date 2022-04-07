var divLista = document.getElementsByClassName("tables");
console.log(divLista);
document.getElementById("btn-users").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.remove("hidden");
    divLista[1].classList.add("hidden");
    divLista[2].classList.add("hidden");
    divLista[3].classList.add("hidden");
});
document.getElementById("btn-contactUs").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.add("hidden");
    divLista[1].classList.remove("hidden");
    divLista[2].classList.add("hidden");
    divLista[3].classList.add("hidden");
});
document.getElementById("btn-products").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.add("hidden");
    divLista[1].classList.add("hidden");
    divLista[2].classList.remove("hidden");
    divLista[3].classList.add("hidden");
});
document.getElementById("btn-news").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.add("hidden");
    divLista[1].classList.add("hidden");
    divLista[2].classList.add("hidden");
    divLista[3].classList.remove("hidden");
});