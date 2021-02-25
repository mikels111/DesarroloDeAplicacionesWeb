var productos = [
    {
        id: 1,
        nombre: "Philadelphia Cheesesteak",
        precio: 5.60,
        descripcion: "Cebolla, Pimiento verde, Ajo, Carne de ternera y Queso",
        alt: "cheesesteak",
        src: "img/cheesesteak.png",

    },
    {
        id: 2,
        nombre: "Full Equipo",
        precio: 7.30,
        descripcion: "Lechuga, Tomate, Pechuga, Mayonesa, Carne de Ternera y Queso",
        alt: "full_equipo",
        src: "img/full_equipo.jpg",
    },
    {
        id: 3,
        nombre: "Mixto",
        precio: 6.40,
        descripcion: "Pechuga, Bacon, Champiñones y Queso",
        alt: "mixto",
        src: "img/bacon.jpg",
    }
];

var productos2 = [
    {
        id: 4,
        nombre: "Agua",
        precio: 1.50,
        alt: "agua",
        src: "img/agua.png",

    },
    {
        id: 5,
        nombre: "Coca-Cola",
        precio: 2.20,
        alt: "coca_cola",
        src: "img/cola.png",
    },
    {
        id: 6,
        nombre: "Cerveza",
        precio: 3.00,
        alt: "cerveza",
        src: "img/beer.png",
    }
];

$(() => {
    $("#img_carro").click(() => {
        // $("#div_carrito").toggle(500);
        $("#div_carrito").animate({ width: 'toggle' }, 500);
    });
});

document.getElementById("imprimir").addEventListener("click", function () {
    printDocument();
});

function printDocument() {
    var opt = {
        margin: 0,
        filename: 'factura.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2, width: 670, height: 450 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    const element = document.getElementById("carrito");
    //if(element)
    html2pdf().set(opt).from(element).save();
}

// ############### Mostrar los bocadillos en pantalla ###############
function mostrarBocadillos() {
    var bocadillos = "";
    productos.forEach(producto => {
        bocadillos += `<div id="${producto.id}" class="card" style="width: 18rem;">
        <img src="${producto.src}" class="card-img-top" alt="bocadillo">
        <div class="card-body">
            <h5 class="card-title">${producto.nombre}</h5>
            <p class="card-text">${producto.descripcion}</p>
            <a id="${producto.id}" href="#" class="btn">Comprar</a>
        </div>
    </div>`
    });

    document.getElementById("div_bocadillos_bebidas2").innerHTML = bocadillos;
}
function mostrarBebidas() {
    var bebidas = "";
    productos2.forEach(producto => {
        bebidas += `<div id="${producto.id}" class="card" style="width: 18rem;">
        <img src="${producto.src}" class="card-img-top" alt="${producto.alt}">
        <div class="card-body">
            <h5 class="card-title">${producto.nombre}</h5>
            <p class="card-text">Fria, Del Tiempo</p>
            <a id="${producto.id}" href="#" class="btn">Comprar</a>
        </div>
    </div>`
    });
    document.getElementById("div_bocadillos_bebidas2").innerHTML = bebidas;
}
mostrarBocadillos();


// ############### Mostrar bocadillos o bebidas en pantalla ###############
var btn_bocadi = document.getElementById("bocadillos").addEventListener("click", function () { cambio_productos(productos) }), btn_bebidas = document.getElementById("bebidas").addEventListener("click", function () { cambio_productos(productos2) });

function cambio_productos(a) {

    if (a == productos) {
        mostrarBocadillos();
    } else {
        mostrarBebidas();
    }
}

// ############### Para comprar cada bocadillo ###############
document.getElementById("div_bocadillos_bebidas2").addEventListener("click", comprar);
var lineasCarrito = [];

function comprar(e) {
    console.log("compra");
    for (let i = 0; i < 3; i++) {
        $("#img_carro").animate({ left: '-20px' }, 100);
        $("#img_carro").animate({ left: '0px', }, 100);
    }

    let id = e.target.id;
    console.log(e.target.innerHTML);
    if (e.target.innerHTML == "Comprar") {

        let producto
        if (id >= 1 && id <= 3)
            producto = productos.find(item => item.id == id);
        else if (id >= 4 && id <= 6)
            producto = productos2.find(item => item.id == id);

        let producto_carrito = lineasCarrito.find(item => item.id == producto.id);

        if (producto_carrito == "" || producto_carrito == null) {
            lineasCarrito.push(
                {
                    id: producto.id,
                    cantidad: 1,
                    nombre: producto.nombre,
                    precio: producto.precio
                }
            );
        } else
            producto_carrito.cantidad += 1;
    }
    actualizarCarrito();
}

function actualizarCarrito() {


    var textoCarrito = `
        <tr>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Total</th>
        </tr>`;
    document.getElementById("carrito").innerHTML = textoCarrito;

    var total = 0;
    lineasCarrito.forEach(compra => {
        total += compra.precio * compra.cantidad;
        textoCarrito += `
        <tr>
            <td>${compra.cantidad}</td>
            <td>${compra.nombre}</td>
            <td>${compra.precio.toFixed(2)}€</td>
            <td>${(compra.precio * compra.cantidad).toFixed(2)}€</td>
        </tr>`;
    });

    textoCarrito += `   
         <tr>
             <td colspan="3">Total Cuenta</td>
             <td>${total.toFixed(2)} €</td>
         </tr>
     `;
    document.getElementById("carrito").innerHTML = textoCarrito;
}
