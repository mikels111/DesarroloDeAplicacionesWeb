document.getElementById("mostrar").addEventListener("click",mostrar);

var tb_nombre=document.getElementById("tb_nombre");
var tb_apellido=document.getElementById("tb_apellido");
var tb_email=document.getElementById("tb_email");
var tb_ciudad=document.getElementById("tb_ciudad");

var input_nomb=document.getElementById("nomb");
var input_apel=document.getElementById("apel");
var input_email=document.getElementById("email");
var input_ciudad=document.getElementById("ciudad");

function mostrar() {
    tb_nombre.innerHTML=input_nomb.value;
    tb_apellido.innerHTML=input_apel.value;
    tb_email.innerHTML=input_email.value;
    tb_ciudad.innerHTML=input_ciudad.value;
}