<style>
  :root {
    --width-inputs: 80%;
    --bg-color-main: rgba(0, 0, 0, .9);
    --color-main: #FFBF00;
    --color-ok: #0C0;
    --color-error: #C00;
    --font-main: 'Montserrat', sans-serif;
  }

  html {
    font-family: var(--font-main);
    font-size: 16px;
  }

  textarea { resize: none; }

  .ContactForm > * {
    padding: .5rem;
    margin: 1rem auto;
    display: block;
    width: var(--width-inputs);
  }

  .ContactForm legend {
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
  }

  .ContactForm input:not([type="submit"]),
  .ContactForm textarea {
    border: medium solid var(--color-main);
    background-color: var(--bg-color-main);
    color: var(--color-main);
    font-size: 1rem;
    font-family: var(--font-main);
  }

  .ContactForm input[type="submit"] {
    width: calc(var(--width-inputs) / 2);
    font-family: var(--font-main);
    font-size: 1rem;
    font-weight: bold;
    background-color: var(--color-main);
    color: #000;
    cursor: pointer;
    outline: 0;
    border: 0;
    transition: all .3s ease-out;
  }

  .ContactForm input[type="submit"]:hover {
    background-color: var(--bg-color-main);
    color: var(--color-main);
  }

  .ContactForm [required]:valid {
    border: thin solid var(--color-ok);
    outline: thin solid var(--color-ok);
  }

  .ContactForm [required]:invalid {
    border: thin solid var(--color-error);
    outline: thin solid var(--color-error);
  }

  .ContactForm [required]:focus {
    border: thin solid var(--color-main);
    outline: thin solid var(--color-main);
  }

  .ContactForm-preload {
    text-align: center;
    color: var(--color-main);
    transition: opacity 400ms ease-out,
                height 400ms ease-out;
  }

  .ContactForm-message {
    margin-top: -1rem;
    padding: .5rem;
    background-color: var(--bg-color-main);
    color: var(--color-main);
    font-size: 1.5rem;
    font-weight: bold;
    text-align: center;
    transition: opacity 400ms ease-out,
                height 400ms ease-out;
  }

  .ContactForm-preload.is-active,
  .ContactForm-message.is-active {
    height: auto;
    opacity: 1;
  }

  .ContactForm-error {
    padding: 0 .5rem;
    font-size: .85rem;
    background-color: var(--color-main);
    color: #000;
    transition: padding 800ms ease-out,
                height 800ms ease-out,
                opacity 800ms ease-out;
  }

  .ContactForm-error.is-active {
    padding: .5rem;
    height: 1.85rem;
    line-height: 1.85rem;
    opacity: 1;
  }

  .u-hidden {
    height: 0;
    overflow: hidden;
    opacity: 0;
  }

  /* http://tobiasahlin.com/spinkit/ */

  .spinner {
    margin: auto;
    width: 50px;
    height: 40px;
    text-align: center;
    font-size: 10px;
  }

  .spinner > div {
    background-color: #333;
    height: 100%;
    width: 6px;
    display: inline-block;
    -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
    animation: sk-stretchdelay 1.2s infinite ease-in-out;
  }

  .spinner .rect2 {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
  }

  .spinner .rect3 {
    -webkit-animation-delay: -1.0s;
    animation-delay: -1.0s;
  }

  .spinner .rect4 {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
  }

  .spinner .rect5 {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
  }

  @-webkit-keyframes sk-stretchdelay {
    0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
    20% { -webkit-transform: scaleY(1.0) }
  }

  @keyframes sk-stretchdelay {
    0%, 40%, 100% {
      transform: scaleY(0.4);
      -webkit-transform: scaleY(0.4);
    }  20% {
      transform: scaleY(1.0);
      -webkit-transform: scaleY(1.0);
    }
  }
</style>
<form class="ContactForm">
  <legend>Envíanos tus comentarios</legend>
  <input type="text" name="contact_name" placeholder="Escribe tu nombre" title="tu nombre" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$"
    required>
  <input type="email" name="contact_email" placeholder="Escribe tu email" title="tu email" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$"
    required>
  <input type="text" name="contact_subject" title="asunto a tratar" placeholder="Asunto a tratar" required>
  <textarea name="contact_comments" title="tus comentarios" placeholder="Escribe tus comentarios" cols="50" rows="5" required></textarea>
  <div class="ContactForm-preload  u-hidden">
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>
  <div class="ContactForm-message  u-hidden">
    <p>Tu información ha sido enviada con éxito</p>
  </div>
  <input type="submit" value="Enviar">
</form>
<script>
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

      xhr.open('POST', './app/api/contact_form.php', true)

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
</script>
