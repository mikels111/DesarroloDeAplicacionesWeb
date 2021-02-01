var elemento;
var div = document.getElementById("div");

document.getElementById("rojo").addEventListener("click", cambiarColor);
document.getElementById("verde").addEventListener("click", cambiarColor);
document.getElementById("amarillo").addEventListener("click", cambiarColor);
document.getElementById("azul").addEventListener("click", cambiarColor);

function cambiarColor(e) {
    elemento = e.currentTarget.id;
    console.log(elemento);
}