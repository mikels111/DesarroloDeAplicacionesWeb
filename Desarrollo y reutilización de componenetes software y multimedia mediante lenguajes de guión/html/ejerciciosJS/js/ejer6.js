let imagen= document.getElementById('img');
//document.getElementById('img').addEventListener("mouseover", encender);
imagen.addEventListener("mouseover", encender);
imagen.addEventListener("mouseout", apagar);

function encender(){
    imagen.src="../img/bombilla-on.gif";
}
function apagar(){
    imagen.src="../img/bombilla-off.gif";
}

