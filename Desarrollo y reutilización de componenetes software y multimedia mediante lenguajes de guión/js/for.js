// for (let i = 0; i < 10; i++) {
//     document.write(`El valor de la variable es ${i} <br>`);
// }
// document.write(` <br>`);
// for (let i = 0; i <= 10; i += 2) {
//     document.write(`El valor de la variable es ${i} <br>`);
// }

// var resultado = "";
// for (let num = 1; num <= 10; num++) {
//     resultado += 7 * num + "<br>";
// }
// document.getElementById("numero").innerHTML = resultado;

var num1 = parseInt(prompt("introduce un numero"));
var num2 = 1;
var resultado2 = "";

if (isNaN(num1)) {
    num1 = parseInt(prompt("introduce un numero"));
} else {
    while (num2 <= 10) {
        resultado2 += num1 * num2 + "<br>";
        num2 += 1;
    }
}
document.getElementById("numero").innerHTML = resultado2;
