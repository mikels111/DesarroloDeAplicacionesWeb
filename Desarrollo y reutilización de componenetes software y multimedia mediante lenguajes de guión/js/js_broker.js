inicio();
var efectivo;
var numero_acciones = 0;
var accion_curso;
var accion_anterior = 0;
var boton = document.getElementById("comprar");
var img_flecha = document.getElementById("flecha");
var tiempo_juego;
var interv_accion;
var interv_efectivo;
var capital;
var persona;
boton.addEventListener("click", comprar);

function inicio() {
  //Pide el nombre de usuario y lo muestra y llama a la
  //funcion main()
  persona = prompt("Introduce tu nombre");
  let txt;
  if (persona == "" || persona == null) {
    txt = "Bienvenido usuario";
    persona = "usuario";
  } else {
    txt = "Bienvenido " + persona;
  }

  document.getElementById("nombre").innerHTML = txt;
  main();
}

function main() {
  accion_curso = 100;
  efectivo = 1000;
  numero_acciones = 0;

  //Inicia los intervalos
  interv_accion = setInterval(intervalAccion, 1000);
  interv_efectivo = setInterval(intervalEfectivo, 100);
  let interv_juego = setTimeout(finJuego, 6000);
  //Asigna un valor a la 
  //accion en curso y al efectivo del usuario
  document.getElementById("accion").innerHTML = accion_curso;
  document.getElementById("efectivo").innerHTML = efectivo;
}

function intervalAccion() {
  let src_flecha;
  //Dos numeros aleatorios, uno(desde 1 hasta el 50% de la accion) 
  //para que suba o baje el precio de la accion en curso. El otro para
  //que suba o baje(si es mayor a 5 la accion sube y si es menor
  //la accion baja).
  let numRnd = Math.floor(Math.random() * (accion_curso * 0.5)) + 1;
  let numRnd2 = Math.floor(Math.random() * 10) + 1;
  if (numRnd2 > 5) {
    accion_curso += numRnd;
  } else {
    accion_curso -= numRnd;
  }

  //Para que la acción no llegue a menos cero
  if (accion_curso < 0) {
    accion_curso = 0;
  }
  document.getElementById("accion").innerHTML = accion_curso;

  //Cambia la imagen de la flecha según si sube o baja la accion
  if (accion_curso > accion_anterior) {
    src_flecha = "../img/arriba.png";
    accion_anterior = accion_curso;
  } else {
    src_flecha = "../img/abajo.png";
    accion_anterior = accion_curso;
  }
  img_flecha.src = src_flecha;

}
function intervalEfectivo() {
  //
  capital = efectivo + (numero_acciones * accion_curso);
  document.getElementById("efectivo").innerHTML = efectivo;
  if (!((efectivo - accion_curso) < 0)) {
    document.getElementById("num_acciones").innerHTML = numero_acciones;
    document.getElementById("capital").innerHTML = capital;
    boton.style.display = 'inline';
  } else {
    boton.style.display = 'none';
  }
  if (efectivo == 0) {
    boton.style.display = 'none';
  }
}

function comprar() {
  efectivo = efectivo - accion_curso;
  numero_acciones += 1;
}

function finJuego() {


  var copa = document.getElementById('copa');
  copa.style.display = 'block';
  var url = copa.getAttribute('src');

  var medal = document.getElementById("medal");
  medal.style.display = 'block';
  var url2 = medal.getAttribute('src');


  // largeImage.style.width=200+"px";
  // largeImage.style.height=200+"px";

  clearInterval(interv_efectivo);
  clearInterval(interv_accion);
  let record;
  if (typeof (Storage) !== "undefined") {

    record = localStorage.getItem("marcador");
    if (capital >= record) {
      localStorage.setItem("nombre", persona);
      localStorage.setItem("marcador", capital);
      //•	Si el record ha sido batido, se actualiza y se felicita al jugador, ha ganado una copa
      window.open(url, 'Image', 'width=180px,height=180px,resizable=1');
      alert("Has batido el record: " + persona + " " + capital + "€");
      
    } else {
      //•	Se informa al jugador del record actual si no lo ha batido y gana una medalla
      window.open(url2, 'Image', 'width=180px,height=180px,resizable=1');
      alert("No has batido el record. Record actual: " + localStorage.getItem("nombre") + " " + localStorage.getItem("marcador") + "€");
      
    }
  } else {
    alert("El navegador no permite guardar la puntuación");
  }

  let confirm = window.confirm("¿Quieres jugar otra vez?");
  if (confirm) {
    inicio();
  }
}




