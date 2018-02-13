DROP DATABASE mexflix_36;

CREATE DATABASE mexflix_36;

USE mexflix_36;

CREATE TABLE genres(
  genre_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  genre_name VARCHAR(15) NOT NULL
);

CREATE TABLE movies(
  imdb_id CHAR(9) NOT NULL PRIMARY KEY,
  title VARCHAR(80) NOT NULL,
  plot TEXT,
  genres VARCHAR(80) NOT NULL,
  premiere DATE NOT NULL,
  poster VARCHAR(255) DEFAULT './img/no-poster.jpg',
  poster_bg VARCHAR(255) DEFAULT './img/no-poster-bg.jpg',
  trailer VARCHAR(255) DEFAULT '/img/no-trailer.jpg',
  rating DECIMAL(2,1) UNSIGNED DEFAULT NULL,
  category ENUM('Movie', 'Serie') NOT NULL
);