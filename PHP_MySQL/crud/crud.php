<?php
//echo "Probando servidor";
//error_reporting(0);

//http://php.net/manual/es/class.mysqli.php
$mysql = new mysqli( 'localhost', 'root', '', 'mexflix_36' );
//$mysql = new mysqli( 'localhost', 'jonmircha', 'los perros rifan', 'mexflix_36' );

$mysql->set_charset('utf8');

if ( $mysql->connect_error ) {
  $res = array(
    'err' => true,
    'type' => 'Error al conectarse a la base de datos',
    'status' => $mysql->connect_errno,
    'statusText' => $mysql->connect_error
  );
} else {
  /* $res = array(
    'err' => false,
    'type' => 'Conexión exitosa a la base de datos'
  ); */
  $action = 'read';

  if ( isset( $_GET['action'] ) ) {
    $action = $_GET['action'];
  }

  switch ($action) {
    case 'create':
      $res = array(
        'err' => false,
        'type' => 'Acción Create'
      );
      break;

      case 'read':
      $res = array(
        'err' => false,
        'type' => 'Acción Read'
      );
      break;

      case 'update':
      $res = array(
        'err' => false,
        'type' => 'Acción Update'
      );
      break;

      case 'delete':
      $res = array(
        'err' => false,
        'type' => 'Acción Delete'
      );
      break;

    default:
      $res = array(
        'err' => true,
        'type' => 'Acción No permitida'
      );
      break;
  }
}

$mysql->close();

header( 'Content-type: application/json' );
echo json_encode($res);
