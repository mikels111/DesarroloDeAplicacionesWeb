var btn = document.getElementById("cuenta_atras").addEventListener("click", cuentaAtras);
var ano = 0, mes = 0, dia = 0;
//meses, días, horas, minutos y segundos

var fechas = new Date();
var dia_ = fechas.getDate();
var mes_ = fechas.getMonth();
var ano_ = fechas.getFullYear();


var fecha_final;

mes_ = mes_ + 1;
function cuentaAtras() {
    fecha_final = document.getElementById("fecha").value;
    var verfi = verificar(fecha_final);

    //console.log(fecha_finalHora.getSeconds());

    if (verfi) {
        console.log(fecha_final);
        var partes = fecha_final.split("-");
        ano = partes[0];
        mes = partes[1];
        dia = partes[2];

        setInterval(function () { diferenciaHora(fecha_final); }, 1000);

    } else
        alert("error");
        document.getElementById("cuenta").innerHTML = "";

}

function verificar(fecha_final) {
    var fecha_finalHora = new Date(fecha_final);
    var fechasInicial = new Date();
    if (fecha_finalHora - fechasInicial > 0)
        return true
    else
        return false;
}

function diferenciaHora(fecha_final) {
    var fecha_finalHora = new Date(fecha_final);

    var fechasInicial = new Date();

    var fecha_dife = fecha_finalHora - fechasInicial;
    
    document.getElementById("cuenta").innerHTML = Math.floor(fecha_dife / (1000 * 60 * 60 * 24 * 30)) + " Meses "+
    Math.floor(fecha_dife / (1000 * 60 * 60 * 24)) + " Días " +
    Math.floor((fecha_dife % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) + " Horas "+
    Math.floor((fecha_dife % (1000 * 60 * 60)) / (1000 * 60)) + " Minutos "+
    Math.floor(fecha_dife % (1000 * 60) / 1000) + " Segundos";
}