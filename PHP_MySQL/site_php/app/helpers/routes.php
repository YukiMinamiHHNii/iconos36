<?php
$route = ( isset($_GET['p']) ) ? $_GET['p'] : 'home';

switch ($route) {
  case 'home':
    $_GET = array(
      'page' => 'Home',
      'meta_title' => 'Título de la sección Home',
      'meta_description' => 'Descripción de la sección Home',
      'meta_img' => './img/meta-image-home.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/home.php'
    );
    break;

  case 'acerca':
    $_GET = array(
      'page' => 'About',
      'meta_title' => 'Título de la sección Acerca',
      'meta_description' => 'Descripción de la sección Acerca',
      'meta_img' => './img/meta-image-about.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/about.php'
    );
    break;

  case 'servicios':
    $_GET = array(
      'page' => 'Services',
      'meta_title' => 'Título de la sección Servicios',
      'meta_description' => 'Descripción de la sección Servicios',
      'meta_img' => './img/meta-image-services.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/services.php'
    );
    break;

  case 'proyectos':
    $_GET = array(
      'page' => 'Projects',
      'meta_title' => 'Título de la sección Proyectos',
      'meta_description' => 'Descripción de la sección Proyectos',
      'meta_img' => './img/meta-image-projects.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/projects.php'
    );
    break;

  case 'contacto':
    $_GET = array(
      'page' => 'Contact',
      'meta_title' => 'Título de la sección Contacto',
      'meta_description' => 'Descripción de la sección contacto',
      'meta_img' => './img/meta-image-contact.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/contact.php'
    );
    break;

  case 'blog':
    $_GET = array(
      'page' => 'Blog',
      'meta_title' => 'Título de la sección Blog',
      'meta_description' => 'Descripción de la sección Blog',
      'meta_img' => './img/meta-image-blog.jpg',
      'meta_url' => '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
      'content' => './app/views/blog.php'
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
