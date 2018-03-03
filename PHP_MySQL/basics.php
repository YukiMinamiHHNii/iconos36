<?php
  //comentario de una línea
  /*
  Comentario
  de
  varias
  lineas
  */

  $name = 'Jonathan';
  $Name = 'Ulises';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Básicos en PHP</title>
</head>
<body>
  <h1>Básicos en PHP</h1>
  <a href="./index.php#ejercicios">regresar</a>
  <h2>
    Hola mi nombre es <?php echo $name . ' ' . $Name . ' y mi edad es ' . (2018 - 1984); ?>
  </h2>
  <?php
    echo '<h3>Hola mi nombre es ' . $name . '</h3>';
    echo '<h3>Hola mi nombre es $name</h3>';
    echo "<h3>Hola mi nombre es $name</h3>";
    echo "<h3>Hola mi nombre es \$name</h3>";
    echo "<h3>Hola mi nombre es {$name}</h3>";

    function crear_encabezados () {
      $name = '@jonmircha';
      $color_font = 'greenyellow';
      $bg_color = '#222';

      for ($i=1; $i < 7; $i++) {
        echo "<h$i>Encabezado de tipo $i</h$i>";
        echo '<h' . $i . '>Encabezado de tipo ' . $i . '</h' . $i . '>';
      }

      echo "
        <script>
          alert('Hola $name')
        </script>
        <style>
          html {
            background-color: $bg_color;
            color: $color_font;
          }
        </style>
      ";
    }

    crear_encabezados();
    echo "<p>$name</p>";

    //información del servidor web y PHP
    phpinfo();
  ?>
</body>
</html>
