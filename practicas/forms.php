<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forms</title>
</head>
<body>
  <h1>Sending forms info with PHP</h1>
  <a href="../index.php#ejercicios">Back to index</a>
  <h2>GET Form</h2>
  <form method="GET">
    <input type="text" name="user" placeholder="Input your name" required>
    <input type="email" name="mail" placeholder="Input your mail address" required>
    <input type="submit">
  </form>

  <?php
    if(isset($_GET['user'])&&isset($_GET['mail'])){
      echo "<p>This is the data sent through GET method:</p>".
           "<ul>
              <li>User: ".$_GET['user']."</li>
              <li>Mail: ".$_GET['mail']."</li>
           </ul>";
    }
  ?>

  <h2>POST Form</h2>
  <form method="POST">
    <input type="text" name="user" placeholder="Input your name" required>
    <input type="email" name="mail" placeholder="Input your mail address" required>
    <input type="submit">
  </form>

  <?php
    if(isset($_POST['user'])&&isset($_POST['mail'])){
      echo "<p>This is the data sent through POST method:</p>".
           "<ul>
              <li>User: ".$_POST['user']."</li>
              <li>Mail: ".$_POST['mail']."</li>
           </ul>";
    }
  ?>

</body>
</html>
