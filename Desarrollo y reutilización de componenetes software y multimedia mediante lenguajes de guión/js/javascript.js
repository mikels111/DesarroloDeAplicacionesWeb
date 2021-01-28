//alert("hola mundo");
function myFunction() {
    document.getElementById("demo").innerHTML = "el precio total es:" + total;
}
let pBocadillo = 7;
let pBebida = 4;
let total = pBocadillo + pBebida;
let mensaje = "Puedes recoger tu pedido";
pBebida = 2;
pBocadillo = 5;
cantBocadillo = 2;
cantBebida = 3;
total = pBocadillo * cantBocadillo + pBebida * cantBebida;
function funcion2() {
    document.getElementById("p1").innerHTML = "has pedido" + cantBocadillo + " y cada un vale " + pBocadillo;
    document.getElementById("p2").innerHTML = "has pedido" + cantBebida + " y cada un vale " + pBebida;
    document.getElementById("p3").innerHTML = `<b>Precio total es</b> ${total}`;
    document.getElementById("p4").innerHTML = mensaje;
    console.log("Todo funciona correctamente");
}