var imagen = document.getElementById("imagen");
var boton = document.getElementById("btn");
var boton1 = document.getElementById("btn1");

boton.addEventListener("click", anterior);
boton1.addEventListener("click", siguiente);

var img_src = ["donosti.png", "donosti1.png", "donosti2.png", "donosti3.png", "donosti4.png"]
var num = 0;
function anterior() {
    if (num > 0) {
        num -= 1;
    } else if (num == 0) {
        num = 4;
    }

    imagen.src = "../img/" + img_src[num];
}
function siguiente() {
    if (num < 4) {
        num += 1;
    } else if (num == 4) {
        num = 0;
    }

    imagen.src = "../img/" + img_src[num];
}