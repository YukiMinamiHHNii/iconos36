<?php
$route = ( isset($_GET['p']) ) ? $_GET['p'] : 'home';

switch ($route) {
  case 'home':
    $_GET = array(
      'page' => 'Home',
      'meta_title' => 'Home | Mexflix',
      'meta_description' => 'Películas y series, cualquier parecido con Netflix es mera coincidencia.',
      'meta_img' => './img/meta-image-home.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/home.php'
    );
    break;
  case 'movies':
    $_GET = array(
      'page' => 'Movies',
      'meta_title' => 'Movies | Mexflix',
      'meta_description' => 'Listado de películas disponibles.',
      'meta_img' => './img/meta-image-movies.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/home.php'
    );
    break;
  case 'series':
    $_GET = array(
      'page' => 'Series',
      'meta_title' => 'Series | Mexflix',
      'meta_description' => 'Listado de series disponibles.',
      'meta_img' => './img/meta-image-series.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/home.php'
    );
    break;
  case 'contacto':
    $_GET = array(
      'page' => 'Contact',
      'meta_title' => 'Contacto | Mexflix',
      'meta_description' => 'Envíanos tus comentarios.',
      'meta_img' => './img/meta-image-contact.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/contact.php'
    );
    break;

  case 'salir':
    session_destroy();
    $_GET = array(
      'page' => 'Home',
      'meta_title' => 'Home | Mexflix',
      'meta_description' => 'Películas y series, cualquier parecido con Netflix es mera coincidencia.',
      'meta_img' => './img/meta-image-home.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/home.php'
    );
    break;

  default:
    $_GET = array(
      'page' => 'Error-404',
      'meta_title' => 'Error 404: Not Found',
      'meta_description' => 'Disculpa, la página que buscas no existe :(',
      'meta_img' => './img/error-404.jpg',
      'meta_url' => null,
      'content' => './app/views/404.php'
    );
    break;
}
