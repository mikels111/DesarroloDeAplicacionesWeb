window.onload = function () {
    //Cuando el documento ha cargado
    //Añadimos el evento click al boton "enviar" que ejecutará la función "enviar"
    document.getElementById("enviar").addEventListener("click", enviar);
}

function enviar() {
    //En la función enviar guardamos en las variables "nombre" y "dni" los valores de los input con 
    //id "nomb" y "dni". Creamos la variable "mensaje" que se será el mensaje de errores y lo inicializamos
    // a un string vacio. Inicializamos las variables "comp_nom" y "comp_dni".
    var nombre = document.getElementById("nomb").value;
    var dni = document.getElementById("dni").value;
    var mensaje = "";
    var comp_nom = false, comp_dni = false;

    //En las varibles "comp_nom" y "comp_dni" guardamos el valor que devuelven las funciones "comprobarNom" y
    //"comprobarDni" las cuales llevan como argumento las variables "nombre" y "dni" respectivamente.
    comp_nom = comprobarNom(nombre);
    comp_dni = comprobarDni(dni);

    //Si "comp_nom" es "false" añadimos a la variable "mensaje" que el nombre está vacío
    if (comp_nom == false) {
        mensaje += "El nombre está vacío<br>";
    }
    //Si "comp_dni" es "false" añadimos a la variable "mensaje" que el dni está vacío
    if (comp_dni == false) {
        mensaje += "Error en el dni";
    }

    //Si "comp_nom" y "comp_dni" son iguales mediante método "open" abrimos una ventana para enviar el email. Dentro especificamos que es un "mailto" al correo "cebanc@cebanc.com" en el emisor del correo ponemos un correo y en el cuerpo del correo añadimos las varibles "nombre" y "dni";
    if (comp_nom == true && comp_dni == true) {
        window.open("mailto:cebanc@cebanc.com?subject=alumno@gmail.com&body=Nombre: " + nombre + " DNI-NIF: " + dni);
    }
    //Modificamos el contenido de la etiqueta con id "mensa_error" dandole el valor de la variable "mensaje"
    document.getElementById("mensa_error").innerHTML = mensaje;
}
function comprobarNom(nomb) {
    //En la función "comprobarNom" a la variable del parametro le damos el valor del parametro que nos llega con el método "trim" para que elimine los espacios en blanco del valor
    nomb = nomb.trim();
    if (nomb == "" || nomb == null) {
        //Si el nombre es "null" o está vacío la función devuelve "false"
        return false;
    } else {
        //Si no está vacío o es "null" devuelve "true"
        return true;
    }
}
function comprobarDni(dni) {
    //En la función "comprobarDni" guardamos en la varible del parametro el valor del parametro que nos llega con método "trim" para eliminar los espacios en blanco.
    dni = dni.trim();
    //Guardamos la longitud del parametro en la variable "len".
    var len = dni.length;
    if (len < 9 || len > 9) {
        //Si "len" es menor o es mayor a 9 devuelve "false".
        return false;
    } else {
        // Si no es menor o mayor a 9 devuelve "true".
        return true;
    }
}