<?php
  $name= 'YukiMinami';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>Hello my name is <?php echo $name.'and my age is '.(2018-1993);?></h2>
  <?php
    echo '<h2>Hello my name is'.$name.'</h2>';
    echo '<h2>Hello my name is $name</h2>';
    echo "<h2>Hello my name is $name</h2>";
    echo "<h2>Hello my name is \$name</h2>";
    echo "<h2>Hello my name is ($name)</h2>";

    $name= 'YukiMinami';
    $color= '#19A807';
    $background= '#000';

    function crear_encabezados(){
      for($x=1;$x<7;$x++){
        echo "<h$x>Header type $x</h$x>";
      }
    }

    crear_encabezados();

    phpinfo();

    echo "
      <style>
        body {
          background-color: $background;
          color: $color;
        };
      </style>
    ";
  ?>
</body>
</html>
