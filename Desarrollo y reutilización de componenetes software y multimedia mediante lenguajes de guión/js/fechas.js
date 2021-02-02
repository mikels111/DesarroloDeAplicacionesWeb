let fechas = new Date();
let hora = fechas.getHours();
let min = fechas.getMinutes();
let seg = fechas.getSeconds();

let dia = fechas.getDate();
let mes = fechas.getMonth();
let ano = fechas.getFullYear();
// switch (mes) {
//     case 0:
//         mes = "enero"
//         break;
//     case 1:
//         mes = "febrero"
//         break;
//     case 2:
//         mes = "marzo"
//         break;
//     case 3:
//         mes = "abril"
//         break;
//     case 4:
//         mes = "mayo"
//         break;
//     case 5:
//         mes = "junio"
//         break;
//     case 6:
//         mes = "julio"
//         break;
//     case 7:
//         mes = "agosto"
//         break;
//     case 8:
//         mes = "septiembre"
//         break;
//     case 9:
//         mes = "octubre"
//         break;
//     case 10:
//         mes = "noviembre"
//         break;
//     case 11:
//         mes = "diciembre"
//         break;
//     default:
//         break;
// }


document.getElementById("p1").innerHTML = `${fechas}`;
document.getElementById("p2").innerHTML = `Hora: ${hora}`;
document.getElementById("p3").innerHTML = `Minutos: ${min}`;
document.getElementById("p4").innerHTML = `Segundos: ${seg}`;

var meses_array=["enero","febrero","marzo","abril","mayo"];
document.getElementById("dia_mes_ano").innerHTML = `Hoy es ${dia} de ${meses_array[mes]} del ${ano}`;