
$(document).ready(function () {
    //####### 1 #######
    $("#btn1").click(function () {
        $("a[target='_blank']").hide(500);
    });
    $("#btn2").click(function () {
        $("a[target!='_blank']").hide(500);
    });
    $("#btn3").click(function () {
        $("h2[class!='uno']").hide(500);
    });
    //####### 2 #######
    $("#btn4").click(function () {
        $("tr:odd").css("background","red");
    });
    $("#btn5").click(function () {
        $("tr:even").css("font-weight","900");
    });
    //####### 3 #######
    $("#parrafo").mouseenter(function () {
        $(this).css({"background":"grey", "padding":"10px","color":"white"});
    });

    $("#parrafo").mouseleave(function () {
        $(this).css({"padding":"0px"});
    });
    //####### 4 #######
    $("img").mouseenter(function () {
        $(this).css({"opacity":"1","box-shadow":"5px 5px 5px 5px"});
    });
    $("img").mouseleave(function () {
        $(this).css({"opacity":"0.8","box-shadow":"0px 0px 0px 0px","color":"grey"});
    });
});
