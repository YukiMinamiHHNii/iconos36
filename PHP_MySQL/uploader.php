<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subir archivos al servidor</title>
</head>
<body>
  <h1>Subir archivos al servidor</h1>
  <a href="index.php#ejercicios">regresar</a>
  <form method="POST" enctype="multipart/form-data">
    <input type="file" name="a_file" required>
    <input type="submit" value="Subir archivo">
  </form>
  <?php
    var_dump($_FILES);
    if ( isset( $_FILES['a_file'] ) ) {
      echo '<ul>';
        foreach ($_FILES['a_file'] as $key => $value) {
          echo "
            <li>
              Propiedad: <b>$key</b>.
              Valor: <b>$value</b>.
            </li>
          ";
        }
      echo '</ul>';

      $filename = $_FILES['a_file']['tmp_name'];
      $destination = './files/' . $_FILES['a_file']['name'];

      move_uploaded_file($filename, $destination);

      if ( $_FILES['a_file']['error'] ) {
        echo '<p>Ocurrió un error al subir el archivo</p>';
      } else {
        echo "
          <p>
            Tu archivo se ha subido con éxito, lo puedes ver <a href=\"$destination\" target=\"_blank\">aquí</a>.
          </p>
        ";
      }
    }
    ?>
</body>
</html>
