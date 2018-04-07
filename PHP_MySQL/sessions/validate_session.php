<?php
session_start();

if ( !$_SESSION['session_status'] ) {
  header('Location: ./logout.php');
}
