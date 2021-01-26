funcion();
main();
var accion;
function main(){
    accion=100;
    document.getElementById("accion").innerHTML=accion;
}
function funcion(){
   var persona= prompt("Introduce tu nombre");
   var txt;
   if(persona=="" || persona==null){
       txt="Bienvenido usuario";
   }else{
       txt="Bienvenido "+persona;
   }
   document.getElementById("nombre").innerHTML=txt;
}

