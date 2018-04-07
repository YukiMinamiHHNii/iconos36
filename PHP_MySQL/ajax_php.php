<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AJAX y Formularios</title>
  <link rel="stylesheet" href="./css/ajax_php.css">
</head>

<body>
  <h1>AJAX y Formularios</h1>
  <a href="./index.php#ejercicios">regresar</a>
  <form class="ContactForm">
    <legend>Envíanos tus comentarios</legend>
    <input type="text" name="name" placeholder="Escribe tu nombre" title="tu nombre" pattern="^[A-Za-zÑñÁáÉéÍíÓóÚúÜü\s]+$" required>
    <input type="email" name="email" placeholder="Escribe tu email" title="tu email" pattern="^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$"
      required>
    <input type="text" name="subject" title="asunto a tratar" placeholder="Asunto a tratar" required>
    <textarea name="comments" title="tus comentarios" placeholder="Escribe tus comentarios" cols="50" rows="5" required></textarea>
    <div class="ContactForm-preload  u-hidden">
      <div class="spinner">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
      </div>
    </div>
    <div class="ContactForm-message  u-hidden"></div>
    <input type="submit" value="Enviar">
  </form>
  <script src="./js/ajax_php.js"></script>
</body>

</html>
