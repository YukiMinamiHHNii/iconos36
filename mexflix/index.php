<?php require_once './app/helpers/routes.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once './app/helpers/meta_tags.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body class="<?php echo $_GET['page']; ?>">
  <?php
  require_once './app/components/header.php';
  require_once './app/views/home.php';
  require_once './app/components/footer.php';
  require_once './app/components/modal_login.php';
  require_once './app/components/slide_profile.php';
    /* require_once './app/components/header.php';
    require_once $_GET['content'];
    require_once './app/components/footer.php'; */
    ?>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>
