;
((c, d, j, xhr) => {
  const movies = d.getElementById('movies'),
    moviesTemplate = d.getElementById('movies-template').content

  xhr.open('GET', './js/movies.json', true)
  xhr.addEventListener('load', e => {
    //c(xhr)
    if (xhr.status >= 200 && xhr.status < 400) {
      //c(xhr.response)
      //c(j.parse(xhr.response))
      let moviesJSON = j.parse(xhr.response)
      //c(moviesJSON, moviesJSON['movies'])

      moviesJSON['movies'].forEach(movie => {
        moviesTemplate.querySelector('h2').textContent = movie.title
        moviesTemplate.querySelector('b').textContent = movie.year
        moviesTemplate.querySelector('i').textContent = movie.genres
        moviesTemplate.querySelector('img').src = movie.poster
        moviesTemplate.querySelector('img').alt = movie.title

        let clone = d.importNode(moviesTemplate, true)
        movies.appendChild(clone)
      })

    } else {
      movies.innerHTML = `<b>El servidor NO responde. Error N° ${xhr.status}: <mark>${xhr.statusText}</mark></b>`
    }
  })
  xhr.send()

})(console.log, document, JSON, new XMLHttpRequest());

((c, d, j, xhr) => {

})(console.log, document, JSON, new XMLHttpRequest());

((c, d, j, xhr) => {

})(console.log, document, JSON, new XMLHttpRequest());
