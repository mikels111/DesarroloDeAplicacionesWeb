var nombre = prompt("Nombre", "Antonio");

var p1 = document.getElementById("p1");

var fechas= new Date();
var hora = fechas.getHours();
var mensaje;

if(hora>=00 && hora<13){
    mensaje="Buenos dias "+nombre;
}else if(hora>=13 && hora<21){
    mensaje="Buenas tardes "+nombre;
}else{
    mensaje="Buenas noches "+nombre;
}
p1.innerHTML=mensaje;

