<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Envío de correo electrónico</title>
  <style>
    form > * { display: block; }
  </style>
</head>
<body>
  <h1>Envío de correo electrónico</h1>
  <a href="./index.php#ejercicios">regresar</a>
  <form method="POST">
    <input type="text" name="name" placeholder="nombre" required>
    <input type="email" name="email" placeholder="email" required>
    <input type="text" name="subject" placeholder="asunto" required>
    <textarea name="comments" cols="30" rows="10" placeholder="comentarios" required></textarea>
    <input type="submit">
    <input type="hidden" name="send_form" value="true">
  </form>
  <?php
  //var_dump($_SERVER);
  if ( isset( $_POST['send_form'] ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $comments = $_POST['comments'];
    $domain = $_SERVER['HTTP_HOST'];

    $to = "$name < $email >";
    $message = "
      <html>
        <body>
          <p>Datos enviados desde el formulario del sitio $domain</p>
          <ul>
            <li>Nombre: <b>$name</b></li>
            <li>Email: <b>$email</b></li>
            <li>Asunto: <b>$subject</b></li>
            <li>Comentarios: <b>$comments</b></li>
          </ul>
        </body>
      </html>
    ";

    $headers = "MIME-Version 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $headers .= "From: $to";

    if ( mail($to, $subject, $message, $headers) ) {
      echo "<p>Tus datos han sido enviados</p>";
    } else {
      echo "<p>Error al enviar tus datos</p>";
    }
  }
  ?>
</body>
</html>
