var objetos = [
    {
        nombre: "Bacon",
        precio: "4.60",
        img:"bacon.jpg"
    },
    {
        nombre: "Cheesesteak",
        precio: "5.90",
        img:"cheesesteak.png"
    },
    {
        nombre: "Full equip",
        precio: "7.90",
        img:"full_equipo.jpg"
    }
];

var texto = document.getElementById("p");
var texto1 = document.getElementById("p1");
var texto2 = document.getElementById("p2");

var imagen=document.getElementById("imagen");
var img1=document.getElementById("imagen1");
var img2=document.getElementById("imagen2");

texto.innerHTML=`Nombre: ${objetos[0].nombre} <br>precio: ${objetos[0].precio}€`;
texto1.innerHTML=`Nombre: ${objetos[1].nombre} <br>precio: ${objetos[1].precio}€`;
texto2.innerHTML=`Nombre: ${objetos[2].nombre} <br>precio: ${objetos[2].precio}€`;

imagen.src=objetos[0].img;
img1.src=objetos[1].img;
img2.src=objetos[2].img;
