<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD con MySQL, PHP y AJAX</title>
  <link rel="stylesheet" href="./crud.css">
</head>
<body>
  <h1>CRUD con MySQL, PHP y AJAX</h1>
  <a href="../#ejercicios">regresar</a>
  <main class="CRUD">
    <header class="CRUD-header">
      <h2>Lista de Géneros</h2>
      <a href="#add" class="u-btn  u-add">agregar</a>
    </header>
    <aside class="CRUD-response">
      <div class="u-preload  u-hidden">
        <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
        </div>
      </div>
      <div class="u-message  u-hidden">
        Mensaje del Servidor
      </div>
    </aside>
    <table class="CRUD-table  u-hidden">
      <tr>
        <th>genre_id</th>
        <th>genre_name</th>
        <th></th>
        <th></th>
      </tr>
    </table>
  </main>
  <template id="table-row">
    <tr>
      <td class="genre_id"></td>
      <td class="genre_name"></td>
      <td>
        <a href="#edit" class="u-btn  u-edit">editar</a>
      </td>
      <td>
        <a href="#delete" class="u-btn  u-delete">eliminar</a>
      </td>
    </tr>
  </template>
  <script src="./crud.js"></script>
</body>
</html>
