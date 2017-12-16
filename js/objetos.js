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

  const perro2 = {
    nombre: 'Boni',
    edad: 10,
    esterilizado: false,
    raza: 'Boxer',
    genero: 'Hembra',
    ladrar: function () {
      c('Guauuu guauuu!!!')
    },
    comer: function (comida = 'croquetas') {
      c(`${this.nombre} come ${comida}`)
      c(this.nombre + ' come ' + comida)
    },
    aparecer: function (imagen) {
      d.write('<img src="' + imagen + '">')
      d.write(`<img src="${imagen}">`)
    }
  }

  c(
    perro2,
    perro2.nombre,
    perro2.edad,
    perro2.esterilizado,
    perro2.raza,
    perro2.genero
  )

  perro2.ladrar()
  perro2.comer()
  perro2.comer('tacos')
  perro2.aparecer('https://i1.wp.com/www.mundoperro.net/wp-content/uploads/boxer-perro-guardian.jpg?w=822&h=564&crop&ssl=1')
})(console.log, document);

(function (c, d) {
  c('*****Clases de POO*****')

})(console.log, document);
