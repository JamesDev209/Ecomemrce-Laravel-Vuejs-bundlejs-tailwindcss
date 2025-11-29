




persona = [  //javascript mapea un arrat
    {
    name: "Shop",
    edad: "30",
    profesion: "Desarrollador",
    ciudad: "Madrid"},
    {
    name: "Products",
    edad: "25",
    profesion: "Diseñador",
    ciudad: "Barcelona"
    }
]

function mayorEdad(persona) {
    return persona.edad >= 18;
}

const personasMayores = persona.filter(mayorEdad);
console.log(personasMayores);