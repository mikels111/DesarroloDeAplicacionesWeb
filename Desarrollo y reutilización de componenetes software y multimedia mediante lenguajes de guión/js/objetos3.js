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
let texto;
for (let index = 0; index < productos.length; index++) {
    texto += ` El producto con id:${productos[index].id} se llama: ${productos[index].alt} <br>`;

}
document.getElementById("p1").innerHTML = texto;

texto = "";
productos.forEach(producto => {
    texto += `El producto con id ${producto.id} se llama ${producto.alt} y su descripción  es ${producto.descripcion} <br>`
});
document.getElementById("p2").innerHTML = texto;

//Buscar un elemento en el array
let id = 3;
let producto = "";
for (let index = 0; index < productos.length; index++) {
    if (productos[index].id) {
        producto = ` El producto con id:${productos[index].id} se llama: ${productos[index].alt} <br>`;
        break;
    }
}
document.getElementById("p3").innerHTML = producto;

// Buscar elementos  en el array con find
let producto2 = productos.find(producto => producto.id == id);
document.getElementById("p4").innerHTML = ` El producto con id:${producto2.id} se llama: ${producto2.alt} <br>`;

let numeros = [3, 4, 60, 20, 48, 12, 45], mayores = [];
//otro array que cumpla las condiciones
for (let i = 0; i < numeros.length; i++) {
    if (numeros[i] > 18) {
        mayores.push(numeros[i]);
    }
}
console.log(mayores);

//crear un array con todos los elementos que cumplen una condición utilizando filter

let mayores_filter = numeros.filter(numero => numero > 18);
console.log(`Resultado utilizando filter --> ${mayores_filter}`);


