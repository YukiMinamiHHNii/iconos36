<?php
//echo 'Información solicitada a través de AJAX y PHP :)' . $_POST['name'];

$res = array(
  'error' => false,
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'subject' => $_POST['subject'],
  'comments' => $_POST['comments']
);

header('Content-type: application/json');
echo json_encode($res);
