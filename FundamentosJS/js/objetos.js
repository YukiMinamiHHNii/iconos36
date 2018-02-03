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

  //Una clase es un modelo a seguir, un machote
  class Perro {
    //El constructor es un método especial que se ejecuta en el momento de instanciar la clase
    constructor ( nombre, edad, esterilizado, raza, genero ) {
      //Definición de los Atributos de mi clase
      this.nombre = nombre
      this.edad = edad
      this.esterilizado = esterilizado
      this.raza = raza
      this.genero = genero
    }

    //Definición de los métodos de mi clase
    ladrar () {
      c('Guauuu guauuu!!!')
    }

    comer ( comida = 'croquetas' ) {
      c(`${this.nombre} come ${comida}`)
      c(this.nombre + ' come ' + comida)
    }

    aparecer ( imagen ) {
      d.write('<img src="' + imagen + '">')
      d.write(`<img src="${imagen}">`)
    }
  }

  const firulais = new Perro('Firulais', 3, true, 'Callejero', 'Macho')

  c(
    firulais,
    firulais.nombre,
    firulais.edad,
    firulais.esterilizado,
    firulais.raza,
    firulais.genero
  )

  firulais.ladrar()
  firulais.comer('Carne')
  firulais.aparecer('http://cinicosdesinope.com/wp-content/uploads/2015/09/firulais-perro-mascota-rugrats-personajes.png')

  const frida = new Perro('Frida', 7, true, 'Labrador', 'Hembra')

  c(
    frida,
    frida.nombre,
    frida.edad,
    frida.esterilizado,
    frida.raza,
    frida.genero
  )

  frida.ladrar()
  frida.comer()
  frida.aparecer('https://o.aolcdn.com/images/dims?crop=2364%2C3246%2C0%2C0&quality=85&format=jpg&resize=900%2C1236&image_uri=http%3A%2F%2Fo.aolcdn.com%2Fhss%2Fstorage%2Fmidas%2F3aa22b4c66e6368bdd04f368deab49d6%2F205731066%2FDSC_8215.JPG&client=a1acac3e1b3290917d92&signature=39c3a0c8a4f94b2f3bd71ba723559c988e183df0')
})(console.log, document);
