<?php
session_start();
if ( isset( $_POST['send_session'] ) ) {

  /*
  $sql = "SELECT * FROM users WHERE user_name = '" . $_POST['user'] . "' AND user_pass = MD5('" . $_POST['pass'] . "')";

  IR a consultar la tabla de usuarios y si existe un registro con los datos que el el formulario envía validar la session si no existe validar a falso

  ejemplo:
  $validate_user = $mysql->num_rows
  if ( $validate_user === 1 ) {
    $_SESSION['status'] = true;
  } else {
    $_SESSION['status'] = false;
  }

  */

  if ( $_POST['user'] === 'admin' && $_POST['pass'] === 'qwerty' ) {
    $_SESSION['status'] = true;
  } else {
    $_SESSION['status'] = false;
  }
} else {
  $_SESSION['status'] = false;
}


