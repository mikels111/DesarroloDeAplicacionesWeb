var frases=[
    "Mañana serás rico",
    "Dentro de una semana serás presidente de tu país",
    "Mañana comerás pollo",
    "Vas a aprobar tu siguiente examen",
    "Mañana no dormirás",
    "Dentro de un año estarás en un nuevo trabajo",
    "Dentro de un més irás al cine"
]


document.getElementById("adivinar").addEventListener("click",mostrar);
function mostrar() {
    let numRnd = Math.floor(Math.random() * 7) + 1;
    document.getElementById("p1").innerHTML=frases[numRnd];
}
