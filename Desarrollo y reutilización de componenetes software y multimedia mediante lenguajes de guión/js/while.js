var numero;
var mensaje;
var correcto;
document.getElementById("enviar").addEventListener("click", comprobar, false);

function comprobar() {

    while (isNaN(numero) || numero < 1 && numero > 13) {

    }

    numero = parseInt(document.getElementById("numero").value);
    console.log(numero);
    if (!isNaN(numero) && numero > 0 && numero < 13) {
        correcto = true;
    } else {
        correcto = false;
    }
    document.getElementById("mensaje").innerHTML = mensaje;
}