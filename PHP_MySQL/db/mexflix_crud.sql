/* Listado de operaciones CRUD */

/* CREATE */
INSERT INTO movies (category, imdb_id, title, premiere, genres) VALUES
  ('Serie', 'tt0877057', 'Death Note', '2006-10-04', 'Animation, Crime, Drama' );

/* READ */
SELECT * FROM movies;

SELECT category, title, rating, genres, premiere FROM movies;

SELECT COUNT(*) FROM movies;

SELECT COUNT(*) AS num_genres FROM genres;

SELECT * FROM movies WHERE category = 'Movie';

SELECT category, title, rating, genres, premiere FROM movies WHERE category = 'Serie' OR category = 'Movie';

SELECT category, title, rating, genres, premiere FROM movies WHERE category IN ('Serie', 'Movie');

SELECT category, title, rating, genres, premiere FROM movies WHERE genres IN ('Drama', 'Comedy');

SELECT category, title, rating, genres, premiere FROM movies WHERE genres LIKE 'Comedy%';

SELECT category, title, rating, genres, premiere FROM movies WHERE genres LIKE '%Drama';

SELECT category, title, rating, genres, premiere FROM movies WHERE genres LIKE '%Drama%';

SELECT category, title, rating, genres, premiere FROM movies WHERE genres LIKE '%Drama%' AND category ='Movie';

SELECT category, title, rating, genres, premiere FROM movies WHERE NOT genres LIKE '%Drama%' AND category = 'Movie';

SELECT category, title, rating, genres, premiere FROM movies WHERE genres LIKE '%Drama%' AND category != 'Movie';

SELECT category, title, rating, genres, premiere FROM movies WHERE NOT genres LIKE '%Drama%' AND category != 'Movie';

SELECT category, title, rating, genres, premiere FROM movies ORDER BY rating;

SELECT category, title, rating, genres, premiere FROM movies ORDER BY rating DESC;

SELECT category, title, rating, genres, premiere FROM movies ORDER BY rating DESC, title;

SELECT category, title, rating, genres, premiere FROM movies ORDER BY rating DESC, title, premiere DESC;

SELECT category, title, rating, genres, premiere FROM movies WHERE rating BETWEEN 8.0 AND 8.9 ORDER BY rating DESC;

SELECT category, title, rating, genres, premiere FROM movies WHERE premiere BETWEEN '2014-01-01' AND NOW()  ORDER BY rating DESC;

SELECT category, title, rating, genres, premiere FROM movies WHERE premiere BETWEEN '2014-01-01' AND NOW()  ORDER BY premiere DESC;

SELECT category, title, rating, genres, premiere FROM movies WHERE premiere BETWEEN '2014-01-01' AND NOW()  ORDER BY premiere DESC, rating DESC;

/* UPDATE */
UPDATE movies SET
  title = 'La Libreta de la Muerte',
  rating = 9,
  poster = 'https://image.tmdb.org/t/p/w220_and_h330_bestv2/kRqxzUnggepFAQPj4JeLGc87uKM.jpg',
  poster_bg = 'https://image.tmdb.org/t/p/w350_and_h196_bestv2/pZ03gzmcll4wQB2nLGF1WgcifXc.jpg',
  trailer = '<iframe width="560" height="315" src="https://www.youtube.com/embed/mxcH--Y7WiA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
  plot = 'Light Yagami es un excelente estudiante japonés que ha tenido una vida un tanto aburrida. Esto cambia radicalmente cuando encuentra tirado en el patio de la escuela un cuaderno negro conocido como Death Note (Libreta de la Muerte), perdido por un Shinigami (Dios de la muerte) llamado Ryuk. Cualquier humano cuyo nombre sea escrito en dicho cuaderno morirá; y, Light -luego de leer las instrucciones en el mismo- ha decidido utilizar este poder para crear un mundo sin criminales, "perfecto" según su visión. Cuando los criminales comienzan a morir de forma masiva y generalmente víctimas de ataque cardíaco, las autoridades envían al legendario detective L en busca del asesino. Con L pisándole los talones: ¿podrá mantener Light su propósito incluso arriesgando su vida?'
  WHERE imdb_id = 'tt0877057';

/* DELETE */
DELETE FROM movies WHERE imdb_id = 'tt0877057';
