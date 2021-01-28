var persona = window.prompt("Introduce tu nombre");


let rand = Math.floor(Math.random() * 6) + 1;

document.getElementById("p1").innerHTML = rand;

let resultado;
if (rand <= 3) {
    resultado =`Has perdido ${persona}`;
    
} else {
    resultado = `Has ganado ${persona}`;
    //document.getElementById("img").setAttribute("src", "../img/copa.png");
    document.getElementById("img").style.width="150px";
    document.getElementById("img").style.height="150px";
    document.getElementById("img").src="../img/copa.png"
}
document.getElementById("p2").innerHTML = resultado;
