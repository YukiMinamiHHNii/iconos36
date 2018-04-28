<?php
$mysql = new mysqli( 'localhost', 'root', '', 'mexflix_36' );

$mysql->set_charset('utf8');

if ( $mysql->connect_error ) {
  $res = array(
    'err' => true,
    'type' => 'Error al conectarse a la base de datos',
    'status' => $mysql->connect_errno,
    'statusText' => $mysql->connect_error
  );
} else {
  switch ($route) {
    case 'movies':
      $sql = "SELECT * FROM movies WHERE category = 'Movie'";
      $search = 'peliculas';
      break;
    case 'series':
      $sql = "SELECT * FROM movies WHERE category = 'Serie'";
      $search = 'series';
      break;
    default:
      $sql = "SELECT * FROM movies";
      $search = 'peliculas y series';
      break;
  }

  $result = $mysql->query($sql);
  $data = array();

  while ( $row = $result->fetch_assoc() ) {
    array_push($data, $row);
  }

  $res = array(
    'err' => false,
    'type' => 'Acción Read',
    'data' => $data,
    'numRows' => $result->num_rows
  );
}

$mysql->close();
?>

<main class="Main">
  <section class="container">
    <div class="row">
      <div class="col s12">
        <p class="flow-text red-text">
          <?php echo $res['numRows'] . ' ' . $search . ' encontradas.' ?>
          <?php //var_dump($res['data']); ?>
        </p>
      </div>
    </div>
    <div class="row">
      <?php
        foreach ($res['data'] as $row => $data) {
          echo '<article class="col s12  offset-m2  m8 l6  offset-xl1 xl5">';
            require './app/components/card.php';
          echo '</article>';
        }
      ?>
    </div>
  </section>
</main>
