
//contraseña correcta

var contr_correct = "cebanc";
var contr = prompt("Contraseña");
var intentos = 3;
var correct = true;


while (!(contr == contr_correct)) {
    if (intentos == 1) {
        correct = false;
        alert("lo has intentado 3 veces");
        break;
    }
    intentos -= 1;
    alert("Contraseña incorrecta")
    contr = prompt("Contraseña");

}
if (correct)
    alert("contraseña correcta");
