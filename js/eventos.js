;
//(function (d, c) {
((d, c) => {
  /* ********** IMPORTACIÓN DE MÓDULOS ********** */

  /* ********** DECLARACIÓN DE VARIABLES ********** */
  const pWhatIsEvent = d.getElementById('what-is-event'),
    btnHello = d.getElementById('btn-hello'),
    btnHeaderFixed = d.getElementById('btn-header-fixed'),
    btnHeaderColor = d.getElementById('btn-header-color'),
    btnCardsFigures = d.getElementById('btn-cards-figures'),
    header = d.getElementById('header'),
    eventsSection = d.getElementById('events'),
    cards = d.querySelectorAll('.card'),
    clock = d.querySelector('.clock'),
    clockTitle = d.querySelector('.clock-title'),
    startClock = d.getElementById('start-clock'),
    stopClock = d.getElementById('stop-clock'),
    startAlarm = d.getElementById('start-alarm'),
    stopAlarm = d.getElementById('stop-alarm')

  /* ********** DECLARACIÓN DE FUNCIONES ********** */
  //http://www.etnassoft.com/2011/09/02/funciones-declaradas-vs-funciones-expresadas-en-javascript/
  //función declarada
  function greet (e) {
    alert('Hola Mundo')
    c( e, e.type, e.target )
    e.target.removeEventListener('click', greet)
    e.target.disabled = true
  }

  //función expresada
  const sayHi = () => {
    //alert('Hola')
    let fecha = new Date(),
      hora = fecha.getHours()

    c( fecha, hora )

    /*
      Vete a dormir 0-5
      Buenos días 6-11
      Buenas tardes 12-18
      Buenas noches 19-23
    */
    /*
      Operadores aritméticos: +, -, *, /, %
      Operadores relacionales: >, <, >=, <=, ==, ===, !=, !==
      Operadores lógicos: AND - &&, OR - ||, NOT - !
    */
    //if ( hora < 6 ) {
    if ( hora <= 5 ) {
      clockTitle.textContent = 'Vete a dormir!!!'
    //} else if ( hora > 7 && hora < 12 ) {
    } else if (hora >= 6 && hora <= 11) {
      clockTitle.textContent = 'Buenos días!!!'
    } else if ( hora >= 12 && hora <= 18 ) {
      clockTitle.textContent = 'Buenos tardes!!!'
    } else {
      clockTitle.textContent = 'Buenos noches!!!'
    }
  }

  /* ********** EJECUCIÓN DE CÓDIGO ********** */
  pWhatIsEvent.innerHTML = 'Los eventos son mecanismos que tenemos en JavaScript para controlar las acciones del usuario y definir el comportamiento del documento en cierto momento o cuando se cumplan ciertas condiciones. Las funciones que se ejecutan en un evento se llaman <b><i>Event Handler</i></b> (Manejador de Eventos).'

  btnHello.addEventListener('click', greet)

  //Función anónima
  btnHeaderFixed.addEventListener('click', function (e) {
    c(
      header.className,
      header.classList,
      header.classList.contains('fixed'),
      header.classList.contains('fix'),
      e,
      e.target,
      e.target.textContent
    )

    if ( header.classList.contains('fixed') ) {
      header.classList.remove('fixed')
      e.target.textContent = 'Cabecera fija'
    } else {
      header.classList.add('fixed')
      e.target.textContent = 'Cabecera normal'
    }

    eventsSection.classList.toggle('after-fixed')
  })

  //Arrow function
  btnHeaderColor.addEventListener('click', e => {
    header.classList.toggle('bg-yellow')
    header.classList.toggle('bg-green')

    if ( header.classList.contains('bg-yellow') ) {
      e.target.textContent = 'Cabecera verde'
    } else {
      e.target.textContent = 'Cabecera amarilla'
    }
  })

  btnCardsFigures.addEventListener('click', e => {
    c( cards, cards[2] )
    //cards[2].classList.toggle('card')
    /* cards.forEach(function (el) {
      el.classList.toggle('card')
    }) */

    cards.forEach( el => el.classList.toggle('card') )

    /*
      = Asignación de valor
      == Comparación de valores
      === Comparación de valores y tipo de dato
    */

    if ( e.target.textContent === 'Cambiar a figuras' ) {
      e.target.textContent = 'Cambiar a tarjetas'
    } else {
      e.target.textContent = 'Cambiar a figuras'
    }
  })

  d.addEventListener('DOMContentLoaded', sayHi)
})(document, console.log);
