;
((d, c) => {
  const panel = d.querySelector('.Panel'),
    panelBtn = d.querySelector('.Panel-button'),
    hamburger = d.querySelector('.hamburger')

  panelBtn.addEventListener('click', e => {
    e.preventDefault()
    hamburger.classList.toggle('is-active')
    panel.classList.toggle('is-active')
  })
})(document, console.log);
