var imagen = document.getElementById("imagen");
var boton = document.getElementById("btn");
boton.addEventListener("click",cambiar);
var img_src=["donosti.png","donosti1.png","donosti2.png","donosti3.png","donosti4.png"]
function cambiar(){
    let numRnd = Math.floor(Math.random() * 5) + 0;

    imagen.src = "../img/"+img_src[numRnd];
}
