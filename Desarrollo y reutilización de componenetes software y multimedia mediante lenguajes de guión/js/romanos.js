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
var dict_rom = {
    "i": 1,
    "v": 5,
    "x": 10,
    "l": 50,
    "c": 100,
    "d": 500,
    "m": 1000,
    "I": 1,
    "V": 5,
    "X": 10,
    "L": 50,
    "C": 100,
    "D": 500,
    "M": 1000,
};

var btn_rom_lat = document.getElementById("conversion1"), btn_lat_rom = document.getElementById("conversion2");

btn_rom_lat.addEventListener("click", romanosLatinos);
btn_lat_rom.addEventListener("click", latinosRomanos);

function romanosLatinos() {
    var num_sig;
    var input_rom = document.getElementById("romanos").value, suma_resta = 0;
    //alert(dicti[input_rom]);
    // Comprobar si ha introducido algo, si son letras y si las letras son
    // numeros romanos
    if (!comprobarRom(input_rom)) {
        alert("Error");
    } else {
        partes = input_rom.split("");
        for (let letra = 0; letra < partes.length; letra++) {
            if (dict_rom[partes[letra + 1]] == undefined) {
                num_sig = 0;
            } else {
                num_sig = dict_rom[partes[letra + 1]];
            }
            console.log(dict_rom[partes[letra]]);

            if (dict_rom[partes[letra]] > num_sig) {
                suma_resta += dict_rom[partes[letra]];
                console.log("suma");
            } else if (dict_rom[partes[letra]] < num_sig) {
                suma_resta -= dict_rom[partes[letra]];
                console.log("resta");
            } else {
                suma_resta += dict_rom[partes[letra]];
                console.log("suma: son iguales");
                // if(suma_resta == ){

                // }
            }
        }
        alert(suma_resta);
    }
}

function latinosRomanos() {
    var input_lat = document.getElementById("latinos").value;
    // Comprobar si ha introducido numeros latinos
    if (!comprobarLat(input_lat)) {
        alert("Error");
    } else {
        alert(input_lat);
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

function comprobarLetrasRom(letra) {
    //Si la letra no es igual a ninguna de los numeros romanos retorna false
    if (!(letra == "i" || letra == "v" || letra == "x" || letra == "l" || letra == "c" || letra == "d" || letra == "m" || letra == "I" || letra == "V" || letra == "X" || letra == "L" || letra == "C" || letra == "D" || letra == "M")) {
        return false;
    } else
        return true;

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