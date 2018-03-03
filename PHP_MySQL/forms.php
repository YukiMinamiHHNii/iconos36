<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envío de formularios con PHP</title>
</head>
<body>
  <h1>Envío de formularios con PHP</h1>
  <a href="./index.php#ejercicios">regresar</a>
  <h2>Formulario GET</h2>
  <form>
    <input type="text" name="name" placeholder="tu nombre" required>
    <input type="email" name="email" placeholder="tu email" required>
    <input type="submit">
  </form>
  <?php
    //echo $_GET;
    if ( isset($_GET['name'], $_GET['email']) ) {
      echo "
        <p>Tus datos han sido enviados por GET y son:</p>
        <ul>
          <li>Nombre: <b>" . $_GET['name'] . "</b></li>
          <li>Email: <b>" . $_GET['email'] . "</b></li>
        </ul>
      ";
      var_dump($_GET);
    }
  ?>
  <h2>Formulario POST</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="tu nombre" required>
    <input type="email" name="email" placeholder="tu email" required>
    <input type="submit">
  </form>
  <?php
    //echo $_POST;
    if ( isset($_POST['name']) && isset($_POST['email']) ) {
      echo "
        <p>Tus datos han sido enviados por POST y son:</p>
        <ul>
          <li>Nombre: <b>" . $_POST['name'] . "</b></li>
          <li>Email: <b>" . $_POST['email'] . "</b></li>
        </ul>
      ";
      var_dump($_POST);
    }
  ?>
</body>
</html>
