<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manejo de sesiones</title>
</head>
<body>
  <h1>Manejo de sesiones</h1>
  <a href="../#ejercicios">regresar</a>
  <form action="./create_session.php" method="POST">
    <input type="text" name="user" placeholder="usuario" required>
    <input type="password" name="pass" placeholder="contraseña" required>
    <input type="submit">
  </form>
  <?php
  if ( isset($_GET['error']) ) {
    echo '<p style="color: red;">Tu usuario y/o contraseña son incorrectos</p>';
  }
  ?>
</body>
</html>
