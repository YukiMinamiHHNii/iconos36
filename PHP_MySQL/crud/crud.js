;
((d, w, c, j, xhr) => {
  const preload = d.querySelector('.u-preload'),
    message = d.querySelector('.u-message'),
    table = d.querySelector('.CRUD-table'),
    tr = d.getElementById('table-row').content

  d.addEventListener('DOMContentLoaded', e => {
    preload.classList.add('is-active')

    xhr.open('GET', './crud.php', true)

    xhr.addEventListener('readystatechange', e => {
      c(xhr)
    })

    xhr.send()
  })
})(document, window, console.log, JSON, new XMLHttpRequest());
