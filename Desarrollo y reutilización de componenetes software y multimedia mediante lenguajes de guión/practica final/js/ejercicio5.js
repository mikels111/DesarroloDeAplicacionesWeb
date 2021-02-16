window.onload = function () {
    //Cuando el documento ha cargado, guardamos en la variable numero el valor que nos escriba el usuario mediante el método prompt y inicializamos la variable mensaje a un string vacío.
    var numero = window.prompt("Teclea un numero");
    var mensaje = "";
    if (!(isNaN(numero))) {
        //Comprobamos de que el valor de la variable "numero" sea un número mediante el método "isNaN"
        if (numero >= 100) {
            //Si el mayor o igual a 100 modificamos la variable "mensaje" con un mensaje diciendo que el número introducido es incorrecto.
            mensaje = "Número incorrecto";
        } else {
            // Si no es mayor o igual a 100 le modificamos la variable "mensaje" con un mensaje diciendo el cuadrado del numero introducido.
            mensaje = "el cuadrado del " + numero.toString() + " es " + numero * numero;
        }
    } else {
        // Si el valor que ha introducido el usuario es un string modificamos la variable mensaje diciendo que el número introducido es incorrecto.
        mensaje = "Número incorrecto";
    }
    //Modificamos el contenido de la etiqueta con id "mensaje" dandole el valor de la variable "mensaje"
    document.getElementById("mensaje").innerHTML = mensaje;
}
