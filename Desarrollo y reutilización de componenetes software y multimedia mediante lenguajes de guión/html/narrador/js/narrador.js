let selector = document.getElementById("selector");
let textarea = document.getElementById("textarea");
let botonleer = document.getElementById("botonLeer");

let lector = new SpeechSynthesisUtterance();
let voces = [];
speechSynthesis.addEventListener("voiceschanged", cargarVoces);

textarea.addEventListener("click", leyendo);
selector.addEventListener("change",cambioVoz);



function cargarVoces() {
    voces = speechSynthesis.getVoices();
    voces.forEach(item => {
        let option = document.createElement("option")
        option.value = item.name;
        option.textContent = `${item.name} - ${item.lang}`
        selector.appendChild(option);
    });
}
function leyendo() {
    lector.text = textarea.value;
    speechSynthesis.speak(lector);
}
function cambioVoz(e) {
    console.log(e.target.value);
    
    lector.voice = voces.find(item => item.name === e.target.value);
}
