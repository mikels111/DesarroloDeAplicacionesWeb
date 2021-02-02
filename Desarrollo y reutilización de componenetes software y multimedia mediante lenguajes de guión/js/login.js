let nom_local = "carlos";
let contra_local = "1234";
document.getElementById("entrar").addEventListener("click", comprobar, false);

function comprobar() {
    let nombre = document.getElementById("nombre").value;
    nombre = nombre.trim();
    nombre = nombre.toLowerCase();
    let contra = document.getElementById("contra").value;
    if (nombre == nom_local && contra == contra_local) {
        alert("ok, puedes pasar");
    } else {
        alert("no puedes pasar")
    }
}