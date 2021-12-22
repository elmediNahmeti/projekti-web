var divLista = document.getElementsByClassName("forms");
document.getElementById("btn_kyqu").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.remove("hidden");
    divLista[1].classList.remove("hidden");
    divLista[2].classList.add("hidden");
});
document.getElementById("btn_regjistrohu").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.remove("hidden");
    divLista[2].classList.remove("hidden");
    divLista[1].classList.add("hidden");
});
document.getElementById("button").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.add("hidden");
    divLista[1].classList.add("hidden");
    divLista[2].classList.add("hidden");
});
var inputLR = document.getElementsByClassName("input-field");
document.getElementById("login_submit").addEventListener("click", function (event) {
    event.preventDefault();
    if (inputLR[0].value.length === 0 && inputLR[1].value.length === 0) {
        alert("Hapesirat nuk lejohet te jene te zbrazura");
    }
    else if (inputLR[0].value.length < 5) {
        alert("Username nuk ben te jete me i vogel se 5 karaktere");
    }
    else if (inputLR[1].value.length < 5) {
        alert("Pasvordi nuk ben te jete me i vogel se 5 karaktere");
    }
    else {
        alert("Mire se vini ne llogarine tuaj " + inputLR[0].value);
    }
})
document.getElementById("register_submit").addEventListener("click", function (event) {
    event.preventDefault();
    if (inputLR[2].value.length === 0 && inputLR[3].value.length === 0
        && inputLR[4].value.length === 0 && inputLR[5].value.length === 0) {
        alert("Hapesirat nuk lejohet te jene te zbrazura");
    }
    else if (inputLR[2].value.length < 5) {
        alert("Username nuk ben te jete me i vogel se 5 karaktere");
    }
    else if (!(emailIsValid(inputLR[3].value))) {
        alert("Email nuk eshte ne rregull");
    }
    else if (inputLR[4].value.length < 6) {
        alert("Paswordi duhet te kete se paku 6 karaktere");

    }
    else if (!(inputLR[4].value === inputLR[5].value)) {
        alert("Paswordat duhet te jene te njejte");
    }
    else {
        alert("Jeni regjistruar me sukses!");
    }
})
function emailIsValid(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}
