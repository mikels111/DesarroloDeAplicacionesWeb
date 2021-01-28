let num = 0;
let num2 = 0;
num = window.prompt("introduce un numero");
num2 = window.prompt("Introduce otro numero");
let texto;
if (num > num2) {
    texto = "num es mayor que num2";
} else if(num2 > num) {
    texto = "num2 es mayor que num1";
}
else{
    texto="son iguales";
}

document.getElementById("p1").innerHTML = texto;