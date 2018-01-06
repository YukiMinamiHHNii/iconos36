;
(function (c, d) {
  /* ********** IMPORTACIÓN DE MÓDULOS ********** */

  /* ********** DECLARACIÓN DE VARIABLES ********** */
  const pWhatIsDOM = d.getElementById('what-is-dom'),
    tagLink = d.createElement('link'),
    cards = d.getElementById('cards'),
    tagFigure = d.createElement('figure')

  /* ********** DECLARACIÓN DE FUNCIONES ********** */

  /* ********** EJECUCIÓN DE CÓDIGO ********** */
  //Manejo de selectores CSS con JS
  c(
    d.querySelector('li'),
    d.querySelector('#theory'),
    d.querySelector('.card'),
    d.querySelector('#dom-methods  code'),
    d.querySelectorAll('li'),
    d.querySelectorAll('.card'),
    d.querySelectorAll('li').length,
    d.querySelectorAll('.card').length,
    d.querySelectorAll('li')[4],
    d.querySelectorAll('#theory'),
    d.querySelectorAll('#theory')[0],
    d.querySelectorAll('#dom-methods  code'),
    d.getElementById('theory')
  )

  pWhatIsDOM.innerText = 'El <b>Modelo de Objetos del Documento</b> (<i>DOM - Document Object Model</i>) es un API para documentos HTML y XML. Éste proveé una representación estructural del documento, permitiendo modificar su contenido y presentación visual mediante código JS.'

  pWhatIsDOM.innerHTML = 'El <b>Modelo de Objetos del Documento</b> (<i>DOM - Document Object Model</i>) es un API para documentos HTML y XML. Éste proveé una representación estructural del documento, permitiendo modificar su contenido y presentación visual mediante código JS.'

  tagLink.rel = 'stylesheet'
  tagLink.href = './css/dom.css'
  d.head.appendChild(tagLink)

  //Manejo de objetos del DOM
  c(
    d, //objeto document de JS
    d.head, //Elemento <head>
    d.body, //Elemento <body>
    d.documentElement, //Elemento <html>
    d.documentElement.lang, //accediendo al valor del atributo lang del elemento <html>
    d.head.querySelector('title') //título del documento
  )

  //Manejo de los elementos del DOM por su posición
  c(
    cards,
    cards.parentElement, // Padre del elemento
    cards.children, //Hijos del elemento
    cards.firstElementChild, // Primer hijo del elemento
    cards.lastElementChild, // Último hijo del elemento
    cards.children[2],
    cards.previousElementSibling, // Elemento hermano previo
    cards.nextElementSibling // Elemento hermano siguiente
  )

  //Eliminando el primer hijo del elemento
  cards.removeChild( cards.firstElementChild )

  c( cards.firstElementChild )

  //Manejo  de clases CSS en JS
  c(
    d.getElementById('theory').className, // Devuelve el valor del atributo class en un String
    d.getElementById('theory').classList // Devuelve el valor del atributo class en un Arreglo
  )

  tagFigure.innerHTML = `
    <img src="http://lorempixel.com/400/400/food" alt="Food">
    <figcaption>Food</figcaption>
  `

  cards.insertBefore( tagFigure, cards.lastElementChild )

  tagFigure.classList.add('card') // Agrega una clase
  tagFigure.classList.remove('card') //Elimina una clase
  tagFigure.classList.toggle('card') //Intercambia una clase
  c(
    tagFigure.classList.contains('card') //Evalua si existe la clase
  )

  cards.insertAdjacentHTML('beforeend', `
    <figure class="card">
      <img src="http://lorempixel.com/400/400/sports" alt="Sports">
      <figcaption>Sports</figcaption>
    </figure>
  `)
})(console.log, document);
