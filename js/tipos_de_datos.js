// Comentario de una línea

/*
  Comentario
  de
  varias
  líneas
*/

//Es buena práctica comenzar tu archivo con un punto y coma
;

//Declaración y asignación de variables primitivas
//Para declarar una variable en JS se utilizaba la palabra 'var. Ahora usamos 'const' o 'let'

let cadena = 'Hola Mundo',
  numero = 19.11,
  booleano = true,
  nulo

console.log(
  'Tipos primitivos',
  cadena,
  numero,
  booleano,
  nulo
)

cadena = 'Hello world'
numero = 20
booleano = false
nulo = null

console.log(
  'Nuevos valores',
  cadena,
  numero,
  booleano,
  nulo
)

//Declaración de funciones
function saludo ( nombre = 'Desconocido' ) {
  //Concatenacion de variables
  console.log( 'Hola ' + nombre )
  //Interpolación de variables
  console.log( `Hola ${nombre}` )
}

//Invocación o ejecución de funciones
console.log('Tipos complejos')
console.log('Funciones')
saludo('Jonathan')
saludo()

//Diferencia entre let y const
const PI = 3.141592653589793

//Cuando usamos const forzozamente hay que asignar un valor a la variable
//const unaConstante

console.log( PI )
//Una vez que una variable de tipo const se le asigna valor, éste no podrá cambiar
//PI = 3.1416

//Declaración de objetos
const libro = {
  titulo: 'Ready Player One',
  autor: 'Ernest Cline',
  anio: 2011,
  editorial: 'Ediciones B',
  citar: function () {
    return `Ficha bibliográfica: ${this.titulo}. ${this.autor}. Editorial ${this.editorial}, ${this.anio}.`
  }
}

console.log(
  'Objetos',
  '\n',
  libro,
  '\n',
  libro.titulo,
  '\n',
  libro.autor,
  '\n',
  libro.anio,
  '\n',
  libro.editorial,
  '\n',
  libro.citar()
)

libro.autor = {
  nombre: 'Ernest',
  apellido: 'Cline'
}

console.log(
  libro,
  '\n',
  libro.autor,
  '\n',
  libro.autor.nombre,
  '\n',
  libro.autor.apellido
)
