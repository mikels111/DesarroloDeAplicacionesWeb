
var num = "";
for (let i = 0; i <= 50; i++) {
    if (i % 2 == 0) {
        num = num + i + "<br>";
    }

}
document.getElementById("p1").innerHTML = num;