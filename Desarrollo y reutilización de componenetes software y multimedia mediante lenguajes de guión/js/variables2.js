let num1, num2;
num1 = window.prompt("introduce un número", 1);
num2 = window.prompt("introduce otro numero", 1);


document.getElementById("p1").innerHTML = num1 - num2;
document.getElementById("p2").innerHTML = num1 * num2;