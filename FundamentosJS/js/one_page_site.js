;
((d, c) => {
  //Variables
  const panel = d.querySelector('.Panel'),
    panelBtn = d.querySelector('.Panel-button'),
    hamburger = d.querySelector('.hamburger'),
    scrollBtns = d.querySelectorAll('.u-scrollBtn'),
    scrollSections = d.querySelectorAll('.u-scrollSection')

  //Funciones
  function moveScroll(el) {
    window.scrollTo({
      behavior: 'smooth',
      left: 0,
      top: el.offsetTop
    })
  }

  //Ejecución de código
  panelBtn.addEventListener('click', e => {
    e.preventDefault()
    hamburger.classList.toggle('is-active')
    panel.classList.toggle('is-active')
  })

  scrollBtns.forEach((btn, pos) => {
    btn.addEventListener('click', e => {
      e.preventDefault()
      moveScroll(scrollSections[pos])
      hamburger.classList.remove('is-active')
      panel.classList.remove('is-active')
    })
  })
})(document, console.log);
