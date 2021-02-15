/*
3.	Añade dos botones más y una imagen
a.	Cuando se pulse el primero añade un párrafo antes de la imagen con la descripción de la misma utilizando before()
b.	Cuando se pulse el segundo añade otra imagen después de la imagen de antes
c.	Cuando hagas click sobre la imagen que has creado antes que esta se elimine utilizando remove()
 */

$(document).ready(function () {
    // ########### 1 ###########
    $("p").mouseenter(function () {
        $(this).before("<p>'Estás sobre el párrafo'</p>");
    });

    $("p").mouseleave(function () {
        $(this).after("<p>'No me abandones'</p>");
    });
    // ########### 2 ###########
    $("#btn1").click(function () {
        $("#p1").text("Pulsa el otro botón para ver la imagen");
    });

    $("#btn2").click(function () {
        $("#p1").html("<img src='../img/3.png' alt='donostia'>");
    });
    // ########### 3 ###########
    $("#btn3").click(function () {
        $("#rosa").before("<p>Rosa azul</p>");
    });
    $("#btn4").click(function () {
        $("#rosa").after("<img class='img_creada' style='width:150px; height:150px;' src='../img/huevo.jpg' alt='huevo'>");
    });

    $("#rosa").click(function () {
        $("img").remove(".img_creada");
    });
    // ########### 4 ###########
    $("#btn5").click(function () {
        $(".cursiva_negrita").removeClass();
    });
    $("#btn6").click(function () {
        $("#cursiva_negri").addClass("cursiva_negrita");
    });
    $("#btn7").click(function () {
        $("#cursiva_negri").toggleClass("cursiva_negrita");
    });
    // ########### 5 ###########
    $("#cab").addClass("grande");
    window.onscroll = () => {
        cambioCab();
    }

});
cambioCab = () => {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        $("#cab").removeClass("grande").addClass("peque");
    } else {
        $("#cab").removeClass("peque").addClass("grande");
    }
}

//"img[id='img_creada']"

