$(() => {
    //######## 1
    $("#ocult_p1").click(function () {
        $("#p1").hide(500);
    });
    $("#ocult_p2").click(function () {
        $("#p2").hide(500);
    });
    //######## 2
    $("#ocult_intro").click(function () {
        $("p[class='intro']").hide(500);
    });
    //######## 3
    $("#ocult_p_primero").click(function () {
        $("p:first").hide(500);
    });
    $("#ocult_p_ultimo").click(function () {
        $("p:last").hide(500);
    });
    //######## 4
    $("#ocult_img").click(function () {
        $("img").hide(500);
    });
    $("#mostrar_img").click(function () {
        $("img").show(500);
    });
    $("#toggle_img").click(function () {
        $("img").toggle(500);
    });
});