/*
Realizar un algoritmo para una agencia de viajes
si el usuario introduce como origen la ciudad de Palma y como destino Barcelona tiene un descuento del 5%

Si el dentino es Madrid, tiene un descuento del 10% y si el destino es Valencia tiene un descueno del 15%. Pedimos los datos con formulario
*/
var origen;
var destino;
var descuento = document.getElementById("descuento");
document.getElementById("consultar").addEventListener("click", consultarDescuento, false);

function consultarDescuento() {
    origen = document.getElementById("origen").value;
    destino = document.getElementById("destino").value;
    // console.log("el origen es " + origen);
    // console.log("el destino es " + destino);
    if (origen == "Palma") {
        if (destino == "Barcelona") {
            descuento.innerHTML = "Tienes un 5% de descuento";
        } else if (destino == "Madrid") {
            descuento.innerHTML = "Tienes un 10% de descuento";
        } else if (destino == "Valencia") {
            descuento.innerHTML = "Tienes un 15% de descuento";
        }
    } else {
        descuento.innerHTML = "No hay descuento";
    }
}