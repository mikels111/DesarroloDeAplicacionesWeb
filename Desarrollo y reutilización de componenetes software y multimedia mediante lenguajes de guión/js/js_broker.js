inicio();
function inicio() {
  var persona = prompt("Introduce tu nombre");
  var txt;
  if (persona == "" || persona == null) {
    txt = "Bienvenido usuario";
  } else {
    txt = "Bienvenido " + persona;
  }
  main();
  document.getElementById("nombre").innerHTML = txt;
}
var accion;
function main() {
  accion = 100;
  var interv = setInterval(intervalAccion, 1000);
  document.getElementById("accion").innerHTML = accion;
}

function intervalAccion() {
  var numRnd= Math.floor(Math.random() * (accion*0.5)) + 1;
  document.getElementById("accion").innerHTML = accion + numRnd;
}
