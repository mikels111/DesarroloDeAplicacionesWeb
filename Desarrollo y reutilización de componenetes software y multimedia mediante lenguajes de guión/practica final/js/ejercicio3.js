window.onload = function () {
    //Cuando el documento ha cargado
    //Añadimos el evento click al boton con id "abrir" el cual llama a una función.
    document.getElementById("abrir").addEventListener("click", function () {
        //Con el método "open" abrimos una ventana a "google" con las caracteristicas: 400px de ancho, 300 px de alto,
        //que se pueda modificar su tamaño y la posición en la que se abre la ventana.
        window.open("https://www.google.com", '', 'width=400px,height=300px,resizable=1,top=0px,left=0px');
    });
}
