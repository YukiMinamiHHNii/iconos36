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
      if (xhr.readyState === 4) {
        preload.classList.remove('is-active')
        message.classList.add('is-active')
        //c(xhr)

        if (xhr.status >= 200 && xhr.status < 400) {
          let res = j.parse(xhr.response)
          //c(res)
          if (res.numRows === 0) {
            message.innerHTML = 'No existen datos para la consulta ejecutada'
          } else {
            message.classList.remove('is-active')
            table.classList.add('is-active')

            res.data.forEach(row => {
              c(row)
              tr.querySelector('.genre_id').textContent = row.genre_id
              tr.querySelector('.genre_name').textContent = row.genre_name
              tr.querySelector('.u-edit').dataset.id = row.genre_id
              tr.querySelector('.u-delete').dataset.id = row.genre_id

              let clone = d.importNode(tr, true)
              table.appendChild(clone)
            });
          }
        } else {
          message.innerHTML = `<b>El servidor NO responde. Error N° ${xhr.status}: <mark>${xhr.statusText}</mark></b>`
        }
      }
    })

    xhr.send()
  })
})(document, window, console.log, JSON, new XMLHttpRequest());
