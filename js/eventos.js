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
    cards = d.querySelectorAll('.card')

  /* ********** DECLARACIÓN DE FUNCIONES ********** */
  function greet (e) {
    alert('Hola Mundo')
    c( e, e.type, e.target )
    e.target.removeEventListener('click', greet)
    e.target.disabled = true
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
})(document, console.log);
