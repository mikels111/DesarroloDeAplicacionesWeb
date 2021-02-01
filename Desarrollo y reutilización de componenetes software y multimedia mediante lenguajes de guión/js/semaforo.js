document.getElementById("consultar").addEventListener("click", consulta, false);
var verde = document.getElementById("verde");
var rojo = document.getElementById("rojo");
var naranja = document.getElementById("naranja");
var mensaje;
var seleccionado;


function consulta() {
    // if (verde.checked) {
    //     mensaje = "puedes pasar";
    // } else if (rojo.checked) {
    //     mensaje = "No puedes pasar";
    // } else if (naranja.checked) {
    //     mensaje = "precaucion";
    // }

    // document.getElementById("mensaje").innerHTML = mensaje;
    seleccionado = document.querySelector('input[name="semaforo"]:checked').value;
    console.log(seleccionado);
    document.getElementById("mensaje").innerHTML = seleccionado;
}