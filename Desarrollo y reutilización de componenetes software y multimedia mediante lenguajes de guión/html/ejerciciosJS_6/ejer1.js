/*1.	Realiza una web que tenga un enlace que sea una imagen y al pulsarlo se abra una ventana nueva con la web www.google.com.
La nueva ventana ha de tener un tamaño de 500px x 500px y aparecer en la posición 20 20 de la pantalla
2.	Crea otro enlace que abra una ventana nueva con título “Mi ventana” y de tamaño 300px x 250px que contenga un párrafo “Soy una ventana de 300 x 200”

*/
document.getElementById("google").addEventListener("click", function () { window.open("https://www.google.com", '', 'width=500px,height=500px,resizable=1,top=20px,left=20px'); })

document.getElementById("btn").addEventListener("click", () => {
    window.open("mi_ventana.html", '', 'width=300px,height=250px,resizable=1,top=20px,left=20px');
});