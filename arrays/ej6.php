<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Diccionario de extensiones</h1>
    <?php
      // Array asociativo: la clave es la extensión y el valor es su descripción
      $extensiones = [
        "php"  => "Archivo de código PHP que se ejecuta en el servidor",
        "html" => "Documento de marcado para crear páginas web",
        "css"  => "Hoja de estilos que define el aspecto de una página web",
        "js"   => "Archivo de código JavaScript que se ejecuta en el navegador",
        "sql"  => "Archivo con sentencias para bases de datos",
        "jpg"  => "Imagen comprimida en formato JPEG"
      ];

      if (isset($_POST['extension'])) {
        $buscada = $_POST['extension'];

        if (array_key_exists($buscada, $extensiones)) {
          echo "<p>", $extensiones[$buscada], "</p>";
        } else {
          echo "<p>Extensión no encontrada</p>";
        }
      }
    ?>
    <form action="#" method="post">
      Introduzca una extensión:
      <input type="text" name="extension">
      <input type="submit" value="Buscar">
    </form>
  </body>
</html>
