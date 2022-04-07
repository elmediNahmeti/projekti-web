var divLista = document.getElementsByClassName("forms");

document.getElementById("btn-login").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.remove("hidden");
    divLista[1].classList.add("hidden");
});
document.getElementById("btn-register").addEventListener("click", function (event) {
    event.preventDefault();
    divLista[0].classList.add("hidden");
    divLista[1].classList.remove("hidden");
});

function validate() {
    let inputs = document.querySelectorAll('input');

    username = inputs[0].value;
    password = inputs[1].value;


    if (username == '' || password == '') {
        alert('Username or password cant be empty');
        return false;
    }

    return true;
}

function validateRegister() {
    var inputLR = document.getElementsByClassName("input-field");
    
    const usernameRegex= /^[a-zA-Z0-9]+$/;

    if (inputLR[2].value.length === 0 && inputLR[3].value.length === 0
        && inputLR[4].value.length === 0 && inputLR[5].value.length === 0) {
        alert("Hapesirat nuk lejohet te jene te zbrazura");
        return false;
    }
    else if (!usernameRegex.test(inputLR[2].value)) {
        alert("Username duhet te jete i perber vetem nga Shkornja ose Numra!");
        return false;
    }
    else if (!(emailIsValid(inputLR[3].value))) {
        alert("Email nuk eshte ne rregull");
        return false;
    }
    else if (inputLR[4].value.length < 6) {
        alert("Paswordi duhet te kete se paku 6 karaktere");
        return false;

    }
    else if (!(inputLR[4].value === inputLR[5].value) ) {
        alert("Passwordi juaj duhet te jete i njejt me Confirm Password!");
        return false;
    } else if (!passwordiIsValid(inputLR[4].value)){
        alert("Passwordi juaj duhet te i plotesoj kushtet! \n te jete me i gjate se 8 karaktere \n te kete se paku nje numer \n se paku nje shkronje te Madhe ");
        return false;
    }
    
    else {
        return true;
    }
    
}
function emailIsValid(email){
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
function passwordiIsValid(password){
    const passwordRegex = /^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/;
    return passwordRegex.test(password);
}
