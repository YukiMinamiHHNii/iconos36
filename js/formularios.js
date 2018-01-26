;
((d, c) => {
  const inputs = d.querySelectorAll('[required]'),
    preload = d.querySelector('.ContactForm-preload'),
    message = d.querySelector('.ContactForm-message')

  c(inputs)

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
      //c(`Evento keyup ${e.keyCode}`)
      let input = e.target

      if (input.pattern) {
        //c('Evalúa el patrón')
        let regex = new RegExp(input.pattern)

        //operador ternario
        //(condición) ? true : false
        return (!regex.exec(input.value))
          ? d.getElementById(input.name).classList.add('is-active')
          : d.getElementById(input.name).classList.remove('is-active')
      } else {
        //c('Evalúa que no se vaya vacio')
        return (!input.value)
          ? d.getElementById(input.name).classList.add('is-active')
          : d.getElementById(input.name).classList.remove('is-active')
      }
    }
  })

  d.forms[0].addEventListener('submit', e => {
    alert('Enviando Formulario')
    e.preventDefault()
    preload.classList.add('is-active')
    setTimeout(() => {
      preload.classList.remove('is-active')
      message.classList.add('is-active')
      d.forms[0].reset()
      setTimeout(() => {
        message.classList.remove('is-active')
      }, 3000)
    }, 2000)
  })

})(document, console.log);
