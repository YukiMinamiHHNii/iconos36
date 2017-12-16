;
(function (c, d) {
  c('*****Objetos Literales*****')

  const perro = {
    nombre: 'kEnAi',
    edad: 5,
    esterilizado: true,
    raza: 'Callejero',
    genero: 'Macho',
    ladrar: function () {
      c('Guauuu guauuu!!!')
    },
    comer: function ( comida = 'croquetas' ) {
      c( `${this.nombre} come ${comida}` )
      c( this.nombre + ' come ' + comida )
    },
    aparecer: function ( imagen ) {
      d.write('<img src="' + imagen + '">')
      d.write(`<img src="${imagen}">`)
    }
  }

  c(
    perro,
    perro.nombre,
    perro.edad,
    perro.esterilizado,
    perro.raza,
    perro.genero
  )

  perro.ladrar()
  perro.comer()
  perro.comer('tacos')
  perro.aparecer('https://jonmircha.github.io/edjs-paradigmas2017/img/kEnAi.jpg')
})(console.log, document);
