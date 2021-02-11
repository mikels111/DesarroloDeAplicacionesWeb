// $(()=>{
//     alert();
// })
//El evento onload se dispara cuando todos elementos del documento han sido creados y las imagenes han sido cargadas
window.onload = function () {
    alert("hola");
    //evento sobre la imagen 1
    document.getElementById("img1").addEventListener("click", avisar);
    //evento utilizando funciones anónimas sobre la segunda imagen
    document.getElementById("img2").addEventListener("click", function () {
        alert("has hecho click sobre la segunda imagen");
    });

    // Arrow functions (Funciones flecha)
    document.getElementById("img3").addEventListener("click", () => {
        alert("Has hecho click sobre la tercera imagen");
    });
    //Las funciones flecha pueden no llevar parentesis si tienen un argumento
    document.getElementById("img3").addEventListener("click", e => {
        alert("Has hecho click sobre la tercera imagen");
    });
}

// Las demas funciones las ponemos fuera del onload
function avisar() {
    alert("has hecho click sobre la primera imagen");
}