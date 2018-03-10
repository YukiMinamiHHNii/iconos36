<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP y MySQL</title>
  <style>
    :root {
      --color-primary: #8892BF;
      --color-secondary: #4F5B93;
      --color-third: #E5E5E5;
    }

    html {
      font-family: sans-serif;
      font-size: 16px;
      line-height: 1.6;
    }

    body {
      width: 80%;
      margin: auto;
    }

    a {
      color: var(--color-secondary);
      transition: all .3s ease-out;
    }

    a:hover {
      color: var(--color-primary);
    }

    pre {
      padding: 1rem;
      background-color: var(--color-third);
      color: var(--color-primary);
      overflow-x: auto;
    }

    h1,
    h2,
    h3 {
      padding: .5rem 1rem;
      background-color: var(--color-primary);
      color: var(--color-secondary);
    }

    h1,
    h3 {
      text-align: center;
    }

    img {
      margin: auto;
      display: block;
      max-width: 70%;
      height: auto;
    }
  </style>
</head>
<body>
  <h1>PHP y MySQL</h1>
  <h2>Para comenzar</h2>
  <ul>
    <li>
      Servidor Web
      <ul>
        <li>
          <a href="https://bitnami.com/stacks" target="_blank">Bitnami (LAMP, MAMP o WAMP)</a>
        </li>
        <li>
          <a href="https://www.apachefriends.org/es/index.html" target="_blank">XAMPP</a>
        </li>
        <li>
          <a href="https://www.phpmyadmin.net/" target="_blank">phpMyAdmin</a>
        </li>
      </ul>
    </li>
    <li>
      Bases de Datos
      <ul>
        <li>
          <a href="https://ed.team/blog/conceptos-basicos-de-bases-de-datos" target="_blank">Conceptos básicos de bases de datos</a>
        </li>
        <li>
          <a href="https://ed.team/blog/modelo-entidad-relacion" target="_blank">Modelo Entidad-Relación</a>
        </li>
        <li>
          <a href="https://ed.team/blog/normalizacion-de-bases-de-datos" target="_blank">Normalización de bases de datos</a>
        </li>
      </ul>
    </li>
    <li>
      MySQL
      <ul>
        <li>
          <a href="http://dev.mysql.com/doc/" target="_blank">Documentación oficial</a>
        </li>
        <li>
          <a href="http://mysql.conclase.net/curso/index.php" target="_blank">MySQL con Clase</a>
        </li>
      </ul>
    </li>
    <li>
      PHP
      <ul>
        <li>
          <a href="http://php.net/manual/es/" target="_blank">Documentación oficial</a>
        </li>
        <li>
          <a href="http://www.etnassoft.com/biblioteca/poo-y-mvc-en-php/" target="_blank">POO y MVC en PHP de Eugenia Bahit</a>
        </li>
      </ul>
    </li>
    <li>
      Video tutoriales
      <ul>
        <li>
          <a href="https://www.youtube.com/playlist?list=PL469D93BF3AE1F84F" target="_blank">Tutoriales básicos</a>
        </li>
        <li>
          <a href="https://www.youtube.com/playlist?list=PLvq-jIkSeTUZEHvKw7Gx3g5CjlcvA3jr1" target="_blank">Curso de P.O.O.</a>
        </li>
      </ul>
    </li>
  </ul>
  <h2>MySQL</h2>
  <h3>Sintaxis SQL</h3>
  <p>SQL, NO distingue entre MÁYUSCULAS y minúsculas pero:</p>
  <ul>
    <li>Comandos y palabras reservadas de SQL van en MÁYUSCULAS.</li>
    <li>Nombres de objetos y datos van en minúsculas con
      <b>snake_case</b>.</li>
    <li>Para strings usar comillas simples (
      <b>
        <code>''</code>
      </b>).</li>
    <li>Todas las sentencias terminan con punto y coma (
      <b>
        <code>;</code>
      </b>).</li>
    <li>
      <a href="https://dev.mysql.com/doc/refman/5.7/en/data-types.html" target="_blank">Tipos de Datos (MySQL Doc).</a>
    </li>
    <li>
      <a href="http://mysql.conclase.net/curso/index.php?cap=005#" target="_blank">Tipos de Datos (MySQL con clase).</a>
    </li>
  </ul>
  <h3>Bases de Datos</h3>
  <code><pre>
  CREATE DATABASE a_data_base;
  DROP DATABASE a_data_base;
  SHOW DATABASES;
  USE a_data_base;</pre></code>
  <h3>Tablas</h3>
  <code><pre>
  CREATE TABLE a_table();
  DROP TABLE a_table;
  ALTER TABLE a_table [ADD COLUMN || DROP COLUMN || MODIFY];
  DESCRIBE a_table;</pre></code>
  <h3>CRUD</h3>
  <ul>
    <li>Create -
      <b>
        <code>INSERT</code>
      </b>
    </li>
    <li>Read -
      <b>
        <code>SELECT</code>
      </b>
    </li>
    <li>Update -
      <b>
        <code>UPDATE</code>
      </b>
    </li>
    <li>Delete -
      <b>
        <code>DELETE</code>
      </b>
    </li>
  </ul>
  <h3>CREATE</h3>
  <p>Insertar un registro:</p>
  <code><pre>
  INSERT INTO table (field_1, field_2, ..., field_n)
    VALUES (value_1, value2, ..., value_n);

  INSERT INTO table
    SET field_1 = 'value_1', field_2 = 'value_2', ..., field_n = value_n;</pre></code>
  <p>Insertar varios registros:</p>
  <code><pre>
  INSERT INTO table (field_1, field_2, ..., field_n) VALUES
    (value_1, value2, ..., value_n),
    (value_1, value2, ..., value_n),
    ...,
    (value_1, value2, ..., value_n);</pre></code>
  <h3>READ</h3>
  <p>Leer todos los campos de la tabla:</p>
  <code><pre>
  SELECT * FROM table;</pre></code>
  <p>Leer algunos campos de la tabla:</p>
  <code><pre>
    SELECT field_1, field_2, field_n FROM table;</pre></code>
  <p>Saber cuantos registros tiene mi tabla:</p>
  <code><pre>
    SELECT COUNT(*) FROM table;</pre></code>
  <p>Leer un registro en particular buscando el valor de un campo:</p>
  <code><pre>
    SELECT * FROM table WHERE field_1 = 'value_1';</pre></code>
  <p>Leer registros en particular buscando diferentes valores en un campo:</p>
  <code><pre>
    SELECT * FROM table WHERE field_1 IN ('value_1', 'value_2', 'value_n');</pre></code>
  <p>Leer un registro en particular buscando el valor similar en un campo:</p>
  <code><pre>
    SELECT * FROM table WHERE field_1 LIKE '%value_1';
    SELECT * FROM table WHERE field_1 LIKE 'value_1%';
    SELECT * FROM table WHERE field_1 LIKE '%value_1%';</pre></code>
  <p>Leer un registro en particular buscando el valor con operadores lógicos:</p>
  <code><pre>
    SELECT * FROM table WHERE field_1 = 'value_1' AND field_2 = 'value_2';
    SELECT * FROM table WHERE field_1 = 'value_1' OR field_2 = 'value_2';
    SELECT * FROM table WHERE NOT field_1 = 'value_1';
    SELECT * FROM table WHERE field_1 != 'value_1';</pre></code>
  <h3>UPDATE</h3>
  <p>
    <b>Siempre agregar la clausula WHERE para evitar actualizar toda la tabla</b>
  </p>
  <code><pre>
    UPDATE table
      SET field_1 = 'value_1', field_2 = 'value_2', ..., field_n = value_n
      WHERE field = value;</pre></code>
  <h3>DELETE</h3>
  <p>
    <b>Siempre agregar la clausula WHERE para evitar eliminar toda la tabla</b>
  </p>
  <code><pre>
    DELETE FROM table WHERE field = value;</pre></code>
  <h3>CONSULTAS FULLTEXT</h3>
  <p>Consulta que busca en varios campos de una tabla, se debe definir el campo
    <b>FULLTEXT</b> en la estructura de la tabla.</p>
  <code><pre>
    CREATE TABLE a_table(
      table_id INTEGER UNSIGNED PRIMARY KEY,
      field_1 VARCHAR(80),
      field_2 VARCHAR(80),
      field_3 VARCHAR(80),
      field_4 VARCHAR(80),
      FULLTEXT INDEX a_search(field_1, field_2, field_3, field_4)
    );

    SELECT * FROM table
      WHERE MATCH(field_1, field_2, field_3, field_4)
      AGAINST('a_search' IN BOOLEAN MODE);</pre></code>
  <h2>PHP</h2>
  <ul>
    <li>Significa
      <b>Personal Home Pages</b> (PHP).</li>
    <li>Creado por
      <a href="https://twitter.com/rasmus" target="_blank">Rasmus Lerdoff</a>.</li>
    <li>Originalmente no se pensó como un lenguaje de programación.</li>
    <li>Es el lenguaje de
      <b>backend</b> más extendido en la web.</li>
    <li>PHP, SÍ distingue entre MÁYUSCULAS y minúsculas.</li>
    <li>Usa
      <b>snake_case</b>.</li>
  </ul>
  <h3 id="ejercicios">Desarrollo web con PHP</h3>
  <ul>
    <li>
      <a href="./basics.php">Básicos</a>
    </li>
    <li>
      <a href="./forms.php">Formularios</a>
    </li>
    <li>
      <a href="./uploader.php">Subir archivos al servidor</a>
    </li>
    <li>
      <a href="./sessions/">Manejo de sesiones</a>
    </li>
    <li>
      <a href="./send_mail.php">Envío de correo electrónico</a>
    </li>
  </ul>
  <h3>Desarrollo web (Frontend + Backend)</h3>
  <ul>
    <li>
      <a href="./site_php/">Sitio optimizado con PHP</a>
    </li>
    <li>
      <a href="./routes.php">Manejo de rutas</a>
    </li>
    <li>
      <a href="./ajax_json.php">AJAX y JSON</a>
    </li>
    <li>
      <a href="./ajax_php.php">AJAX y PHP</a>
    </li>
    <li>
      <a href="./crud.php">CRUD en la web</a>
    </li>
  </ul>
</body>
</html>
