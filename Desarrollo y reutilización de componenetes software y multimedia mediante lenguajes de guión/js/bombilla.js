//document.getElementById("bombilla").style.width = ;
function EncenderApagar() {
    let ruta;
    let imagen = document.getElementById("bombilla").getAttribute("src");
    if (imagen == "../img/bombilla-off.gif") {
        ruta = "../img/bombilla-on.gif";
    } else {
        ruta = "../img/bombilla-off.gif";
    }
    document.getElementById("bombilla").src = ruta;
}

function Encender() {
    document.getElementById("bombilla").src = "../img/bombilla-on.gif";
}

function Apagar() {
    document.getElementById("bombilla").src = "../img/bombilla-off.gif";
}