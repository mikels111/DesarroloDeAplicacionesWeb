inicio();
var accion;
var capital_inicial;
var numero_acciones;
var boton = document.getElementById("comprar");
boton.addEventListener("mouseup", comprar)

function inicio() {
  let persona = prompt("Introduce tu nombre");
  let txt;
  if (persona == "" || persona == null) {
    txt = "Bienvenido usuario";
  } else {
    txt = "Bienvenido " + persona;
  }
  
  document.getElementById("nombre").innerHTML = txt;
  main();
}

function main() {
  accion = 100;
  capital_inicial = 1000;
  numero_acciones = 0;
  let interv_accion = setInterval(intervalAccion, 1000);
  let interv_capital = setInterval(intervalCapital, 500);
  document.getElementById("accion").innerHTML = accion + "€";
  document.getElementById("capital").innerHTML = capital_inicial + "€";
}

function intervalAccion() {
  let numRnd = Math.floor(Math.random() * (accion * 0.5)) + 1;
  document.getElementById("accion").innerHTML = accion + numRnd + "€";
}
function intervalCapital(){
  document.getElementById("capital").innerHTML=capital_inicial;
}

function comprar() {
  capital_inicial= capital_inicial - accion;
}
