document.getElementById("comprobar").addEventListener("click", comprobar);

var input_nomb = document.getElementById("nomb");
var input_edad = document.getElementById("edad");


function comprobar() {
    //console.log(input_edad.value +" "+input_nomb.value);
    if (input_nomb.value == "" || input_nomb.value == null || input_edad.value == "" || input_edad.value == null) {
        alert("Falta algun dato");
    } else {
        //ha introducido algo
        if (!(isNaN(input_edad.value))) {
            //ha metido numero
            if (!(input_edad.value.length<=2)){
                alert("Edad incorrecta, demasiados numeros");
            }else{
                alert("Todo correcto");
            }
        }else{
            alert("Edad incorrecta")
        }
    }
}