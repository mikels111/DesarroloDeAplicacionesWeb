var menus=new Array(5);

menus[0]="<h2>El menu de hoy es:</h2>Primer plato: Langostinos<br>Segundo plato: Carne a la parrila<br>Postre: Tiramisú";

menus[1]="<h2>El menu de hoy es:</h2>Primer plato: Sopa<br>Segundo plato: Albóndigas<br>Postre:Flan";

menus[2]= "<h2>El menu de hoy es:</h2>Primer plato: Jamón Ibérico<br>Segundo plato: Rape al Horno<br>Postre: Torrija";

menus[3]= "<h2>El menu de hoy es:</h2>Primer plato: Menestra de Verduras<br>Segundo plato: Risotto<br>Postre: Tarta de queso";

menus[4]= "<h2>El menu de hoy es:</h2>Primer plato: Ensalada César<br>Segundo plato: Confit de Pato<br>Postre: Sorbete de Limón";

document.getElementById("lun").addEventListener("click", function(){mostrar(menus[0])});

document.getElementById("mar").addEventListener("click", function(){mostrar(menus[1])});
document.getElementById("mie").addEventListener("click", function(){mostrar(menus[2])});
document.getElementById("jue").addEventListener("click", function(){mostrar(menus[3])});
document.getElementById("vie").addEventListener("click", function(){mostrar(menus[4])});
function mostrar(y){
    document.getElementById("menu").innerHTML = y;
}