$(()=>{
    $("p").click((e)=>{
        $(e.currentTarget).hide(100);
    });

    $("#ocult_texto").click(()=>{
        $("p:first").hide(100);
    });

    $("#ocult_lista").click(()=>{
        $("li:first").hide(100);
    });
    $("#ocult_lista2").click(()=>{
        $("li:last").hide(100);
    });

    $("#ocult_lista3").click(()=>{
        $("li:first-child").hide(100);
    });

    $("#ocult_lista4").click(()=>{
        $("li:last-child").hide(100);
    });

    // ocultar los elementos seleccionando un atributo igual a un valor
    $("#ocult_a").click(()=>{
        $("[id=ocult_lista]").hide(100);
    });
    // ocultar elementos seleccionando atributos
    $("#ocult_a").click(()=>{
        $("[href]").hide(100);
    });
});