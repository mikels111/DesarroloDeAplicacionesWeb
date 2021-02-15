/*

 */

$(document).ready(function () {
    //2
    $("#div1").hide();
    $("#div2").hide();
    $("#div3").hide();
    //3
    $("#btn1").click(function (e) {
        $("#div1").fadeIn(2000);
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn(3000);
    });
    //4
    $("#btn2").click(function (e) {
        $("#div1").fadeIn(9000);
        $("#div2").fadeIn(5000);
        $("#div3").fadeIn(8000);
    });
    //5
    $("#btn3").click(function (e) {
        $("#div1").fadeToggle(9000);
        $("#div2").fadeToggle(5000);
        $("#div3").fadeToggle(8000);
    });
    //6
    $("#btn4").click(function (e) {
        $("#div1").fadeTo(1000, 0.1);
        $("#div1").fadeTo(2000, 0.5);
        $("#div1").fadeTo(3000, 0.8);

        $("#div2").fadeTo(1000, 0.1);
        $("#div2").fadeTo(2000, 0.5);
        $("#div2").fadeTo(3000, 0.8);

        $("#div3").fadeTo(1000, 0.1);
        $("#div3").fadeTo(2000, 0.5);
        $("#div3").fadeTo(3000, 0.8);
    });

    //7
    $(".img_opacity").mouseenter(function () {
        $(this).css("opacity", "1");
    });

    $(".img_opacity").mouseleave(function () {
        $(this).css("opacity", "0.5");
    });
    //8 y 9
    $(".a p").hide();
    $(".a img").hide();

    // $("#segundo p:last").hide();
    // $("#segundo img").hide();

    // $("#tercero p:last").hide();
    // $("#tercero img").hide();

    $("#div1 h2").click(function (e) {
        $("#div2 img").slideUp();
        $("#div2 p").slideUp();
        $("#div3 img").slideUp();
        $("#div3 p").slideUp();

        $("#div1 img").toggle();
        $("#div1 p").toggle();
        $("#div1 h2").css({ "background": "red", "font-style": "italic" });
    });

    $("#div2 h2").click(function (e) {
        $("#div1 img").slideUp();
        $("#div1 p").slideUp();
        $("#div3 img").slideUp();
        $("#div3 p").slideUp();

        $("#div2 img").toggle();
        $("#div2 p").toggle();
        $("#div2 h2").css({ "background": "red", "font-style": "italic" });
    });

    $("#div3 h2").click(function (e) {
        $("#div2 img").slideUp();
        $("#div2 p").slideUp();
        $("#div1 img").slideUp();
        $("#div1 p").slideUp();

        $("#div3 img").toggle();
        $("#div3 p").toggle();
        $("#div3 h2").css({ "background": "red", "font-style": "italic" });
    });

    //10
    $("#div_3seg img").css("visibility", "hidden");
    $("#div_3seg p").css("visibility", "hidden");
    $("#div_3seg h2").click(function (e) {
        $("#div_3seg img").css({ "visibility": "visible" });
        $("#div_3seg p").css({ "visibility": "visible" });
        setTimeout(function () {
            $("#div_3seg img").css("visibility", "hidden");
            $("#div_3seg p").css("visibility", "hidden");
        }, 3000);
    });

    //11

    $("#div_negro").click(function (e) {
        $(this).animate({ right: '0px' }, 1000);
        setInterval(function () {
            $("#div_negro").css("position", "initial");
        }, 2000);

    });

    $("#btn_animation").click(function (e) {
        $("#div_negro").animate({ right: '300px', opacity: '0.5', width: '200px', height: '200px' }, 1000);
        //
        setInterval(function () {
            $("#div_negro").css("background", "red");
        }, 1000);
    });
    //12
    var izqu = 0, opacid = 1, ancho = 100, alto = 100;
    $("#btn_animation2").click(function (e) {
        izqu += 30;
        opacid -= 0.1;
        ancho += 20;
        alto += 20;
        $("#div_azul").animate({ left: izqu + "px", opacity: opacid, width: ancho + "px", height: alto + "px" }, 1000);

    });

    //13
    $("#h2_inicial").css({ "width": "100%", "opacity": "1", "font-size": "2em" });

    //14
    
    $("#ico_house").click(function (e) {
        $("#nav_lista").animate({ left: '150px' }, 900);
        let izq = $("#nav_lista").css("left");
        if(izq=="150px"){
            $("#nav_lista").animate({ left: '-150px' }, 900);
        }
    });

})


/*
12.	Crea otro div de tamaño inicial 100 x 100 y algún color de fondo
a.	Crea un botón que al pulsar
i.	Desplace el div 30px a la derecha
ii.	Aumente el tamaño en 20px
iii.	Disminuya la opacidad en 0.1

14.	Crea un menú  con una lista y cuatro enlaces al principio del documento, después del h2
a.	Pon un icono encima del menú
b.	Haz que el menú aparezca oculto al principio con un margin-left negativo del ancho del menú
c.	Dale una posición absoluta y un z-index: 999 para que se mantenga en el sitio y aparezca siempre por encima de los demás elementos
d.	Al hacer click sobre el icono haz que aparezca o desaparezca con una animación



*/