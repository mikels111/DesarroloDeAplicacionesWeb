window.onload = function () {

    document.getElementById("switch_theme").addEventListener("click", function () {
        let elements_tema = document.querySelectorAll("[tema]");
        elements_tema.forEach(element1 => {
            element1.classList.forEach(element2 => {
                switch (element2) {
                    case "claro":
                        element1.classList.replace("claro", "oscuro");
                        document.getElementById("switch_theme").innerHTML ="🌙";
                        break;
                    case "oscuro":
                        element1.classList.replace("oscuro", "claro");
                        document.getElementById("switch_theme").innerHTML = "🌞";
                        break;
                    default:
                        break;
                }
            });
        });

    });
}