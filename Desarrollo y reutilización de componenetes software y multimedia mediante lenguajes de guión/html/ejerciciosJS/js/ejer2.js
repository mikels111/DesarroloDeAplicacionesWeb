
function pedirNombre(){
    let nomb=window.prompt("Escribe tu nombre");
    document.getElementById("nombre").innerHTML=`Hola te llamas ${nomb}`;
}
function pedirEdad(){
    let edad=parseInt(window.prompt("Escribe tu edad"));
    document.getElementById("edad").innerHTML=`Tu edad es ${edad}`;
}
function pedirLugar(){
    let lugar=window.prompt("Escribe tu lugar de nacimiento");
    document.getElementById("lugar").innerHTML=`Tu lugar de nacimiento es ${lugar}`;
}

