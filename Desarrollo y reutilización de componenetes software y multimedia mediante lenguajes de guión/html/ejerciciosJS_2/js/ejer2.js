
var num = "";
for (let i = 100; i >= 0; i=i-5) {
    num = num + i + "<br>";
}
document.getElementById("p1").innerHTML = num;