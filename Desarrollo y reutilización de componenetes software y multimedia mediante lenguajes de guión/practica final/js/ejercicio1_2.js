$(document).ready(function () {
    //Cuando el documento ha cargado
    $("#btn1").click(function (e) {
        //En el evento click del boton con id "btn1" selecciona los primeros "li" de la clase con nombre "menu"
        // y modificamos mediante el método css de jquery el color a rojo y el grosor de la fuente
        $(".menu li:first-child").css({ "color": "red", "font-weight": "900" });
    });
    $("#btn2").click(function (e) {
        //En el evento click del boton con id "btn2" selecciona el parrafo con id "p_azul" y mediante el método "slideToggle" y con velocidad de 2000 milisegundos conseguimos el efecto de persiana.
        $("#p_azul").slideToggle(2000);
    });

});




