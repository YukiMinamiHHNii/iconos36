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
