<?php require_once './app/helpers/routes.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once './app/helpers/meta_tags.php'; ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body class="<?php echo $_GET['page']; ?>">
  <?php
    require_once './app/components/header.php';
    require_once $_GET['content'];
    require_once './app/components/footer.php';
  ?>
  <script src="./js/script.js"></script>
</body>
</html>
