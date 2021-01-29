let confirm=window.confirm("¿Estas de acuerdo?");
let texto;
if(confirm){
    texto="Entonces somos amigos";
}else{
    texto="Bueno, ya nos veremos";
}
document.getElementById("texto").innerHTML=texto;