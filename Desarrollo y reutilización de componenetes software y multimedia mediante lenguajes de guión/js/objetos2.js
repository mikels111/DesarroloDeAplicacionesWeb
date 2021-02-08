//Array con los productos
let productos = [
    {
        id: 0,
        imagen: "../img/hamburguesa.jpg",
        alt: "Hamburguesa",
        descripcion: "Deliciosa hamburguesa con queso",
        precio: 5.50
    },
    {
        id: 1,
        imagen: "../img/pasta.jpg",
        alt: "Pasta",
        descripcion: "Pasta fresca al dente",
        precio: 6.90
    },
    {
        id: 2,
        imagen: "../img/pizza.png",
        alt: "Pizza",
        descripcion: "Pizza auténtica italiana",
        precio: 9.00
    },
    {
        id: 3,
        imagen: "../img/refresco.jpg",
        alt: "Refresco",
        descripcion: "Limonada fresquita",
        precio: 2.50
    },
    {
        id: 4,
        imagen: "../img/postre.jpg",
        alt: "Postre",
        descripcion: "Saludable postre casero",
        precio: 4.50
    },
    {
        id: 5,
        imagen: "../img/cafe.jpg",
        alt: "Café",
        descripcion: "Café arábiga recien molido",
        precio: 2.20
    }
];

let lineasCarrito = [];

let texto = "";
productos.forEach(item => {
    texto += `<div class="card">
     <img src="${item.imagen}" alt="${item.alt}">
         <p>${item.descripcion}</p>
         <h4>${item.precio.toFixed(2)} €</h4>
         <button id="${item.id}" class="button">Comprar</button>
     </div> `;
});
document.getElementById("container").innerHTML = texto;

//generar el evento para el container
document.getElementById("container").addEventListener("click", comprar);
function comprar(e) {

    let id = e.target.id;

    if (e.target.innerHTML === "Comprar") {

        let producto = productos.find(item => item.id == id);

        lineasCarrito.push({
            id: producto.id,
            cantidad: 1,
            nombre: producto.alt,
            precio: producto.precio
        });
        actualizarCarrito();

    }
}

function actualizarCarrito() {
    let textoCarrito = `
     <table>
         <caption>Carrito</caption>
         <tr>
             <th>Cantidad</th>
             <th>Producto</th>
             <th>Precio</th>
             <th>Total</th>
         </tr>
         `;


    let total = 0;
    lineasCarrito.forEach(item => {
        total += item.precio * 1;
        textoCarrito += `
             <tr>
                 <td class="centrado">1</td>
                 <td>${item.nombre}</td>
                 <td class="num">${item.precio.toFixed(2)} €</td>
                 <td class="num">${(item.precio * 1).toFixed(2)} €</td>
             </tr>
         `;
    });

    textoCarrito += `   
         <tr>
             <td colspan="3">Total Cuenta</td>
             <td class="num">${total.toFixed(2)} €</td>
         </tr>
     </table>
     `;
    document.getElementById("carrito").innerHTML = textoCarrito;
}