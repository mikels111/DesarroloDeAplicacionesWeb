let disp = false;
function mostrar() {
    document.getElementById('texto').style.display = 'block'
    disp = true;
}
function ocultar() {
    document.getElementById('texto').style.display = 'none'
    disp = false;
}
function mostrar_ocultar() {
    if (disp == true) {
        document.getElementById('texto').style.display = 'none'
        disp=false;
    } else {
        document.getElementById('texto').style.display = 'block'
        disp=true;
    }
}