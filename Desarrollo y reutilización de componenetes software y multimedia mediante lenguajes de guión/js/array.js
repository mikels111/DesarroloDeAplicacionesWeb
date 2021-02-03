// let numeros = [2, 5, 7, 14, 81];
// let numeros2 = new Array(5, 2, 1, 8, 4);

var menu = [];

// let suma = numeros[1] + numeros[4];
// //document.getElementById("p1").innerHTML = `la suma de ${numeros[1]} y ${numeros[4]} es: ${suma}`;

// for (let i = 0; i < numeros.length; i++) {
//     document.getElementById("p1").innerHTML += numeros[i] + "<br>";
// }

// //eliminar el ultimo elemento del array
// numeros2.pop();

var valor_input = document.getElementById("input").value;
document.getElementById("boton").addEventListener("click", añadir);
document.getElementById("boton2").addEventListener("click", mostrar);

function añadir() {
    menu.push(1);
    menu.push(3);
    menu.push(6);

}
function mostrar() {
    for (let num = 0; num < menu.length; num++) {
        document.getElementById("p1").innerHTML += "hola" + menu[num];
    }
}



