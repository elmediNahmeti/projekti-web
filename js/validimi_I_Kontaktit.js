function validateMessage() {
    var inputs = document.getElementsByClassName("input-fields");

    if (inputs[0].value.length === 0 && inputs[1].value.length === 0
        && inputs[2].value.length === 0 && inputs[3].value.length === 0) {
        alert("Fushat nuk munde te jene te zbrazeta !");
        return false;

    } else if (inputs[0].value.length <= 5) {
        alert('Emri nuk munde te jete me  i vogel se 5 karaktere!');
        return false;
    } else if (inputs[1].value.length <= 5) {
        alert('Mbiemri nuk munde te jete me  i vogel se 5 karaktere!');
        return false;
    } else if (!(emailIsValid(inputs[2].value))) {
        alert('Email eshte shkruar gabim!');
        return false;
    }
    else if (inputs[3].value.length <= 10) {
        alert('Mesazhi nuk munde te jete me  i vogel se 10 karaktere!');
        return false;
    } else {
        return true;
    }

}

function emailIsValid(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}