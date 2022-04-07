function validimi(){
    var lista = document.getElementsByClassName('input');
    if(lista[0].value =='' || lista[1].value == '' || lista[1].value <0 ){
        return false;

    }
    return true;
}
function validimiLajmi(){
    var lista = document.getElementsByClassName('input');
    if(lista[0].value =='' || lista[1].value == '' ){
        return false;

    }
    return true;
}