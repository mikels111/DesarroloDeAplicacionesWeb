// $(()=>{
//     alert();
// });

//Jquery
// Evento document ready
$(document).ready(function () {
    alert("el documento está listo");
});

// otra forma de document ready
$(function () {
    alert("el documento está listo 2");
});

//otra forma utilizando las funciones arrow
$(()=>{
    //alert();
    $("#img3").click((e)=>{
        console.log(e.target);
        alert(`función flecha ${e.target.src}`);
    });
});