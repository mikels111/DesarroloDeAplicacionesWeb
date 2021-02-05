var persona = {
    nombre: "Pepito",
    edad:23,
    peso:50.4
};
//agregar propiedad
persona.apellido="Perez"

// cambiar propiedad
persona.apellido="Antonio";
console.log(persona);

//crear un array de objetos;

var personas = [
    {
        nombre:"Antonia",
        edad:40,
        apellido:"caballero"
    },
    {
        nombre:"Pepita",
        edad:30,
        apellido:"caballero"
    },
    {
        nombre:"Maria",
        edad:20,
        apellido:"caballero"
    }
];

personas.forEach(element => {
    console.log(element.nombre);
    
});
