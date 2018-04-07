;
((d, c, j, xhr) => {
  const inputs = d.querySelectorAll('[required]'),
    preload = d.querySelector('.ContactForm-preload'),
    message = d.querySelector('.ContactForm-message')
  //c(inputs)

  inputs.forEach(input => {
    let span = d.createElement('span')

    span.id = input.name
    span.classList.add('ContactForm-error', 'u-hidden')
    span.textContent = `Dato incorrecto, escribe ${input.title}`
    input.insertAdjacentElement('afterend', span)

    //input.addEventListener('keyup', e => c(`Evento keyup ${e.keyCode}`))
  })

  //Delegación de eventos
  d.forms[0].addEventListener('keyup', e => {
    if (e.target.localName === 'input' || e.target.localName === 'textarea') {
      let input = e.target
      //c(`Evento keyup ${e.keyCode}`)
      //c(input.pattern, input.required)

      if (input.pattern) {
        //c('El input tiene patrón')
        let regex = new RegExp(input.pattern)

        //operador ternario
        //(condición) ? true : false
        return (!regex.exec(input.value))
          ? d.getElementById(input.name).classList.add('is-active')
          : d.getElementById(input.name).classList.remove('is-active')
      } else {
        //c('El input NO tiene patrón')
        return (!input.value)
          ? d.getElementById(input.name).classList.add('is-active')
          : d.getElementById(input.name).classList.remove('is-active')
      }
    }
  })


})(document, console.log, JSON, new XMLHttpRequest());
