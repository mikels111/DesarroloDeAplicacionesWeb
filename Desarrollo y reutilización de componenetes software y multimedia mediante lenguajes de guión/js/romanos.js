//Realizar un conversor de números latinos a romanos y viceversa
// 1-I
// 5-V
// 10-X
// 50-L
// 100-C
// 500-D
// 1000-M

// 600-DC
// 4000-MMMM
//const i = 1, v = 5, x = 10, l = 50, c = 100, d = 500, m = 1000;
//const I = 1, V = 5, X = 10, L = 50, C = 100, D = 500, M = 1000;
// Los multiplos de 5 no se pueden poner dos veces seguidas
// Se pueden restar el primer numero menos el siguiente consecutivamente, menos los multiplos de 5 a otro numero
var dict_rom = {
    "i": 1,
    "v": 5,//no se pueden poner dos----
    "x": 10,

    "l": 50,//no se pueden poner dos----

    "c": 100,
    "d": 500,//no se pueden poner dos----
    "m": 1000,

    "I": 1,
    "V": 5,
    "X": 10,
    "L": 50,
    "C": 100,
    "D": 500,
    "M": 1000,
};

var btn_rom_lat = document.getElementById("conversion1"), btn_lat_rom = document.getElementById("conversion2"), txt_rom_lat = document.getElementById("conv_latinos");

btn_rom_lat.addEventListener("click", romanosLatinos);
btn_lat_rom.addEventListener("click", latinosRomanos);

function romanosLatinos() {
    var num_actual = 0, num_sig, comprobar_iguales = false, iguales = false;
    var input_rom = document.getElementById("romanos").value, suma_resta = 0;
    //alert(dicti[input_rom]);
    // Comprobar si ha introducido algo, si son letras y si las letras son
    // numeros romanos
    if (!comprobarRom(input_rom)) {
        alert("Error");
    } else {
        partes = input_rom.split("");
        for (let letra = 0; letra < partes.length; letra++) {
            comprobar_iguales = false;
            num_actual = dict_rom[partes[letra]];

            if (dict_rom[partes[letra + 1]] == undefined) {
                num_sig = 0;
            } else {
                num_sig = dict_rom[partes[letra + 1]];
            }
            console.log(num_actual);

            if (num_actual > num_sig) {
                if (num_actual == dict_rom[partes[letra - 1]]) {
                    //iguales = true;
                    let suma_iguales = 0;
                    suma_iguales = num_actual + dict_rom[partes[letra - 1]]
                    comprobar_iguales = comprobarRom2(suma_iguales);
                }
                if (!comprobar_iguales) {
                    suma_resta += num_actual;
                    console.log("suma");
                    console.log("suma=" + suma_resta);
                }

            } else if (num_actual < num_sig) {
                //if (dict_rom[partes[letra]] % 5 != 0) {
                console.log("----" + num_actual);
                if (num_actual == 5 || num_actual == 50 || num_actual == 500) {
                    comprobar_iguales = true;
                    break;
                }
                suma_resta -= num_actual;

                console.log("resta");
                console.log("resta=" + suma_resta);
                //} else {
                //    break;
                //}
            } else {
                let suma_iguales1 = 0;
                suma_iguales1 = num_actual + dict_rom[partes[letra - 1]]
                comprobar_iguales = comprobarRom2(suma_iguales1);
                if (!comprobar_iguales) {
                    suma_resta += num_actual;
                    console.log("suma");
                    console.log("suma-iguales=" + suma_resta);
                }
            }
        }
        // if (iguales) {
        //     comprobar_iguales = comprobarRom2(suma_resta);
        // }
        if (comprobar_iguales || suma_resta == 0)
            alert("error");
        else
            txt_rom_lat.innerHTML = suma_resta;
    }
}

function latinosRomanos() {
    var input_lat = document.getElementById("latinos").value;
    // Comprobar si ha introducido numeros latinos
    if (!comprobarLat(input_lat)) {
        alert("Error");
    } else {
        partes = input_lat.split("");
        alert(partes);
    }
}

function comprobarRom(num_rom) {
    var partes, romano = true;
    if (num_rom == "" || num_rom == null) {
        // No hay numero romano;
        return false;
    } else {
        //ha introducido algo
        if ((isNaN(num_rom))) {
            //Son letras
            partes = num_rom.split("");
            for (let letra = 0; letra < partes.length; letra++) {
                let a = comprobarLetrasRom(partes[letra]);
                if (a == false)
                    romano = false;
            }
        } else
            //ha introducido numeros
            romano = false;
        return romano;
    }
}
function comprobarRom2(sum_res) {
    var compr = false;
    //https://stackoverflow.com/questions/34913675/how-to-iterate-keys-values-in-javascript
    for (const [key, value] of Object.entries(dict_rom)) {
        //console.log(value);
        if (sum_res == value) {
            compr = true;
        }
    }
    return compr;
}
function comprobarLat(num_lat) {
    if (num_lat == "" || num_lat == null) {
        // No hay numero latino;
        return false;
    } else {
        //ha introducido algo
        if (!(isNaN(num_lat))) {
            //Son numeros
            return true;
        } else
            //ha introducido letras
            return false;
    }
}

function comprobarLetrasRom(letra) {
    //Si la letra no es igual a ninguna de los numeros romanos retorna false
    if (!(letra == "i" || letra == "v" || letra == "x" || letra == "l" || letra == "c" || letra == "d" || letra == "m" || letra == "I" || letra == "V" || letra == "X" || letra == "L" || letra == "C" || letra == "D" || letra == "M")) {
        return false;
    } else
        return true;

}