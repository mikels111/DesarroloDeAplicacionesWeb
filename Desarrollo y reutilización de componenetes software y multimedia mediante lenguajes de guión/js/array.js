let numeros = [2, 5, 7, 14, 81];
let numeros2 = new Array(5, 2, 1, 8, 4);

let suma = numeros[1] + numeros[4];
//document.getElementById("p1").innerHTML = `la suma de ${numeros[1]} y ${numeros[4]} es: ${suma}`;

for (let i = 0; i < numeros.length; i++) {
    document.getElementById("p1").innerHTML += numeros[i]+"<br>";
}

//eliminar el ultimo elemento del array
numeros2.pop();

