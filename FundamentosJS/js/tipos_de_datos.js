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
  libro.citar,
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

//Declaración de arreglos
const perros = [
  'Husky',
  'Labrador',
  'Pastor Alemán',
  'Gran Danés',
  'Maltés',
  'Boxer'
]

console.log(
  'Arreglos',
  '\n',
  perros,
  '\n',
  perros.length,
  '\n',
  perros[3],
  '\n',
  perros[0],
  '\n',
  perros[6]
)

;
//Es buena práctica encapsular tu código en una función anónima autoinvocada
(function (c, d, w, n) {
  c(
    'Hola función autoinvocada',
    '\n',
    'document, window y navigator son los 3 objetos más importantes de JS en los navegadores',
    '\n',
    d,
    '\n',
    w,
    '\n',
    n
  )

  const perros = [
    'Dálmata',
    'Beagle',
    'Bulldog',
    'Border Collie',
    'Doberman'
  ]

  c(
    perros,
    '\n',
    perros.length
  )
})(console.log, document, window, navigator);

console.log(
  perros,
  '\n',
  perros.length
)
