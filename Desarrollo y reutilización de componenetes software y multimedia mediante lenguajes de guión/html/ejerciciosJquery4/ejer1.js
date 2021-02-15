/*

 */

$(document).ready(function () {
    //2
    //$("div").hide();
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
    $("img").mouseenter(function () {
        $(this).css("opacity", "1");
    });

    $("img").mouseleave(function () {
        $(this).css("opacity", "0.5");
    });
    //8
    $(".a p").hide();
    $(".a img").hide();

    // $("#segundo p:last").hide();
    // $("#segundo img").hide();

    // $("#tercero p:last").hide();
    // $("#tercero img").hide();

    $("#div1 h2").click(function (e) {
        $("#div2 img").hide(); 
        $("#div2 p").hide(); 
        $("#div3 img").hide(); 
        $("#div3 p").hide(); 

        $("#div1 img").toggle();
        $("#div1 p").toggle();
        $("#div1 h2").css({"background":"red","font-style":"italic"});
    });

    $("#div2 h2").click(function (e) { 
        $("#div1 img").hide(); 
        $("#div1 p").hide(); 
        $("#div3 img").hide(); 
        $("#div3 p").hide();

        $("#div2 img").toggle();
        $("#div2 p").toggle();
        $("#div2 h2").css({"background":"red","font-style":"italic"});
    });

    $("#div3 h2").click(function (e) { 
        $("#div2 img").hide(); 
        $("#div2 p").hide(); 
        $("#div1 img").hide(); 
        $("#div1 p").hide();

        $("#div3 img").toggle();
        $("#div3 p").toggle();
        $("#div3 h2").css({"background":"red","font-style":"italic"});
    });
    
})


/*8.	Añade un div class=”acordeon”
9.	Dentro del div crea otros tres div: primero, segundo y tercero cada uno con el siguiente contenido
a.	Un h2 con un título distinto para cada uno y un color de fondo
b.	Una imagen
c.	Un párrafo al lado de la imagen con otro color de fondo
d.	Al cargar el documento haz que solamente se muestren los h2
e.	Al hacer click sobre un h2
i.	haz que se muestre u oculte su imagen y párrafo correspondientes
ii.	que se oculten los demás párrafos e imágenes
iii.	que cambie el color de fondo y el estilo del texto del h2 cuya imagen y texto se están mostrando
*/