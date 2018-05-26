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
  $contact_name = $_POST['contact_name'];
  $contact_email = $_POST['contact_email'];
  $contact_subject = $_POST['contact_subject'];
  $contact_comments = $_POST['contact_comments'];
  $contact_date = date('Y-m-d');

  $sql = "INSERT INTO contact_form (contact_date, contact_name, contact_email, contact_subject, contact_comments) VALUES ('$contact_date', '$contact_name', '$contact_email', '$contact_subject', '$contact_comments')";
  $result = $mysql->query($sql);

  if ( $result ) {
    $err = false;
    $data = 'Comentario recibido con éxito';
  } else {
    $err = true;
    $data = 'Error al tratar de enviar el comentario';
  }

  $res = array(
    'err' => $err,
    'type' => 'Acción Create',
    'data' => $data,
    'sql' => $sql
  );
}

//$result->free();
$mysql->close();




header( 'Content-type: application/json' );
echo json_encode($res);

