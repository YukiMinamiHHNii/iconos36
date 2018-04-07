<?php require './validate_session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenid@ <?php echo $_SESSION['username']; ?></title>
</head>
<body>
  <h1>Bienvenid@ <?php echo $_SESSION['username']; ?></h1>
  <p>
    <mark>Este es otro archivo protegido con una sessión de PHP.</mark>
  </p>
  <p>
    Ir a otro <a href="./protected_file.php">archivo protegido</a>
  </p>
  <p>
    <a href="./logout.php">Salir</a>
  </p>
</body>
</html>
