let num1 = 0;
let num2 = 0;

num1 = num1 + 1;
num2 = num2 + 5;

document.getElementById("p1").innerHTML = `El primer numero es ahora ${num1}`;
document.getElementById("p2").innerHTML = `El segundo numero es ahora ${num2}`;

num2 = num1 + 3;
document.getElementById("p2").innerHTML = `El segundo numero es ahora ${num2}`;

let a = "hola";
let b = " mundo!";

document.getElementById("p3").innerHTML = a + " " + b;


let c, d;
c = 2;
c = 3;
let resultado = c * d;
document.getElementById("p4").innerHTML = `El producto de c por d es ${resultado}`;

let dato;
dato = window.prompt("Introduce un numero", "1");
document.getElementById("p5").innerHTML = `El numero introducido es ${dato}`;

dato="7";
dato = dato * 2;
document.getElementById("p5").innerHTML = ` ${dato}`;