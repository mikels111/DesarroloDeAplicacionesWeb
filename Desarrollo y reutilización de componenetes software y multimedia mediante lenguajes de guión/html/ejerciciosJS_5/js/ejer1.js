var btn_pedir = document.getElementById("comprobar"), p1 = document.getElementById("p1");
btn_pedir.addEventListener("click", comprobar);

function comprobar() {
    var palabra = document.getElementById("input1")
    palabra = palabra.value;

    let texto = "";
    if (palabra == "Donostia") {

        texto += `La primera letra "o" está en la posición: ${palabra.indexOf("o") + 1}, y la última está en la posición ${palabra.lastIndexOf("o") + 1}<br>`;

        texto += `En la posición 2 está el caracter: ${palabra.charAt(1)}<br>`;
        texto += `La palabra ${palabra} contiene ${palabra.length} caracteres<br>`;

    } else if (palabra == "En un lugar de la mancha de cuyo nombre no quiero acordarme") {
        texto += `La palabra "${palabra.substring(18, 25)}" está en la posición: ${palabra.indexOf("mancha")}<br>`;
        texto += `Los primeros 5 caracteres son: "${palabra.substring(0, 5)}"<br>`;
        texto += `Los 3 ultimos caracteres son: "${palabra.substring(palabra.length - 3, palabra.length)}" y la última"${palabra.charAt(palabra.length - 1)}"`;
    } else {
        let letra_e = palabra.indexOf("e");
        let primera_letra = palabra.charAt(0);
        let ultima_letra = palabra.charAt(palabra.length - 1);
        if (letra_e != -1) {
            texto += `Contiene la letra e en la posición ${letra_e + 1}`;
        }
        
        
        //if (ultima_letra ==)

    }
    p1.innerHTML = texto;
}

function vocales(vocal) {
    let vocal=false;
    switch (vocal) {
        case a:
            vocal= true;
            break;
        case e:
            vocal= true;
            break;
        case i:
            vocal= true;
            break;
        case o:
            vocal= true;
            break;
        case u:
            vocal= true;
            break;

        default:
            break;
    }
    return vocal;
}

