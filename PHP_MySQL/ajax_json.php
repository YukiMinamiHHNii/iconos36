<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJAX: Asynchronous JavaScript + XML</title>
  <link rel="stylesheet" href="./css/ajax_json.css">
</head>

<body>
  <h1>AJAX: Asynchronous JavaScript + XML</h1>
  <a href="./index.php#ejercicios">regresar</a>
  <p>
    AJAX permite mejorar completamente la interacción del usuario con la aplicación, evitando las recargas constantes de la página,
    ya que el intercambio de información con el servidor se produce en segundo plano.
  </p>
  <img src="./img/ajax.png" alt="AJAX">
  <p>
    Ajax no es una tecnología en sí mismo. En realidad, se trata de varias tecnologías independientes que se unen:
  </p>
  <ul>
    <li>
      <b>HTML y CSS</b>, para crear una presentación basada en estándares.</li>
    <li>
      <b>DOM</b>, para la interacción y manipulación dinámica de la presentación.</li>
    <li>
      <b>XML, XSLT y JSON</b>, para el intercambio y la manipulación de información.</li>
    <li>
      <b>XMLHttpRequest</b>, para el intercambio asíncrono de información.</li>
    <li>
      <b>JavaScript</b>, para unir todas las demás tecnologías.</li>
  </ul>
  <h2>Más info:</h2>
  <ul>
    <li>
      <a href="http://librosweb.es/libro/ajax/capitulo_7.html" target="_blank">Historia y teoría</a>
    </li>
    <li>
      <a href="https://developer.mozilla.org/es/docs/Web/Guide/AJAX" target="_blank">AJAX en MDN</a>
    </li>
  </ul>
  <h2>AJAX y Envío de Datos</h2>
  <h2>AJAX y APIs</h2>
  <h2>AJAX y JSON (JavaScript Object Notation)</h2>
  <section id="movies" class="ajax"></section>

  <script src="./js/ajax_json.js"></script>
</body>

</html>
