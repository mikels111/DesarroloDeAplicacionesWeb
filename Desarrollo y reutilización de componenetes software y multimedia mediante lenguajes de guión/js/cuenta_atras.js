var btn = document.getElementById("cuenta_atras").addEventListener("click", cuentaAtras);
var ano = 0, mes = 0, dia = 0;
//meses, días, horas, minutos y segundos

var fechas = new Date();
var dia_ = fechas.getDate();
var mes_ = fechas.getMonth();
var ano_ = fechas.getFullYear();


var fecha_final;
var fecha_finalHora;

mes_ = mes_ + 1;
function cuentaAtras() {
    fecha_final = document.getElementById("fecha").value;
    var verfi = verificar(fecha_final);
    fecha_finalHora = new Date(fecha_final);
    console.log(fecha_finalHora);

    if (verfi) {
        console.log(fecha_final);
        var partes = fecha_final.split("-");
        ano = partes[0];
        mes = partes[1];
        dia = partes[2];

        setInterval(function () { diferenciaHora(); }, 1000);

    } else
        alert("error");
}

function verificar(a) {
    var fech = a.split("-");
    ano = fech[0];
    mes = fech[1];
    dia = fech[2];

    if (mes_.toString.length == 1)
        mes_ = 0 + "" + mes_;

    if (dia_.toString.length == 1)
        dia_ = 0 + "" + dia_;

    console.log(" la fecha de hoy " + ` ${ano_} ${mes_} ${dia_}`);
    console.log(` fecha seleccionada ${ano} ${mes} ${dia}`);
    if (a == null || a == "")
        return false;
    else if (ano < ano_)
        return false;
    else if (mes < mes_)
        return false;
    else if (dia <= dia_)
        return false;
    else
        return true;

}

function diferenciaHora() {
    var fechasInicial = new Date();
    var fecha_dife = fecha_finalHora - fechasInicial;
    console.log(fecha_dife);

    var hora_ = fechasInicial.getHours();
    var min_ = fechasInicial.getMinutes();
    var seg_ = fechasInicial.getSeconds();
    //console.log(seg_);

    // document.getElementById("mes").innerHTML = 
    //     document.getElementById("dia").innerHTML
    document.getElementById("hora").innerHTML = hora_;
    document.getElementById("min").innerHTML = min_;
    document.getElementById("seg").innerHTML = " |"+fecha_dife/1000;
}