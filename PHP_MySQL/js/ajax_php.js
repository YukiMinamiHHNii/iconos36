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

  d.forms[0].addEventListener('submit', e => {
    let formData = new FormData(e.target)
    e.preventDefault()
    preload.classList.add('is-active')

    xhr.open('POST', './send_form.php', true)

    xhr.addEventListener('load', e => {
      if (xhr.readyState === 4) {
        preload.classList.remove('is-active')
        message.classList.add('is-active')

        if (xhr.status >= 200 && xhr.status < 400) {
          let formJSON = j.parse(xhr.response)
          message.innerHTML = `
            <p>Tu información se ha enviado con éxito:</p>
            <ul>
              <li>Nombre: ${formJSON.name}</li>
              <li>Email: ${formJSON.email}</li>
              <li>Asunto: ${formJSON.subject}</li>
              <li>Comentarios: ${formJSON.comments}</li>
            </ul>
          `

          c(xhr.response)
        } else {
          message.innerHTML = `<b>El servidor NO responde. Error N° ${xhr.status}: <mark>${xhr.statusText}</mark></b>`
        }
      }
    })

    xhr.send(formData)
  })
})(document, console.log, JSON, new XMLHttpRequest());
