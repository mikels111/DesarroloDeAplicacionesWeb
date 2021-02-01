
var nota;
var mensaje;
var color;
var resultado = document.getElementById("resultado");
document.getElementById("calificacion").addEventListener("click", consulta, false);

function consulta() {
    console.log(nota);
    nota = parseInt(document.getElementById("nota").value);
    switch (nota) {
        case 1:
            mensaje = "tu calificacion es insuficiente";
            color = "red";
            break
        case 2:
            mensaje = "tu calificacion es insuficiente";
            color = "red";
            break
        case 3:
            mensaje = "tu calificacion es insuficiente";
            color = "red";
            break
        case 4:
            mensaje = "tu calificacion es insuficiente";
            color = "red";
            break
        case 5:
            mensaje = "tu calificacion es suficiente";
            color = "green";
            break;
        case 6:
            mensaje = "tu calificacion es bien";
            color = "green";
            break
        case 7:
            mensaje = "tu calificacion es muy bien";
            color = "green";
            break
        case 8:
            mensaje = "tu calificacion es excelente";
            color = "green";
            break
        case 9:
            mensaje = "tu calificacion es sobresaliente";
            color = "green";
            break
        case 10:
            mensaje = "tu calificacion es sobresaliente";
            color = "green";
            break
        default:
            mensaje = "la nota introducida es incorrecta";
            color = "orange";
            break;
    }
    resultado.innerHTML = mensaje;
    resultado.style.color = color;

}