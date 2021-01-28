
let texto="";

let nota1=parseInt(window.prompt("Escribe la primera nota"));
let nota2=parseInt(window.prompt("Escribe la segunda nota"));
let nota3=parseInt(window.prompt("Escribe la tercera nota"));
let media=nota1+nota2+nota3/3;

if(media>=5){
    texto="aprobado"
}
else{
    texto="suspendido"
}
document.getElementById("nota").innerHTML=texto;
