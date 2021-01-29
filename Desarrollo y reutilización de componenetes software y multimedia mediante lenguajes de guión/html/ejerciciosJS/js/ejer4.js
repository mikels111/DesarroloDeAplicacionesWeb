let confirm1 = window.confirm("¿Eres mayor de edad?");
let confirm2 = window.confirm("¿Tienes clave de usuario?");
let texto;
if (confirm1 && confirm2) {
    texto = "Estás autorizado para visitar este sitio";
} else {
    texto = "Lo siento no puedes pasar";
}
document.getElementById("texto").innerHTML = texto;