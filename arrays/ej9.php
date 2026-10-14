<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ejercicio 9 · Colores seleccionados</title>
  </head>
  <body>
    <h1>Colores seleccionados</h1>
    <?php
      // Comprobamos si se ha pulsado el botón de enviar
      if (isset($_POST['enviar'])) {
        // Si no se marca ningún checkbox, $_POST['colores'] no existe
        if (isset($_POST['colores'])) {
          $colores = $_POST['colores'];

          echo "<p>Has elegido los siguientes colores:</p>";
          echo "<ul>";
          foreach ($colores as $color) {
            echo "<li>", $color, "</li>";
          }
          echo "</ul>";
        } else {
          echo "<p>Aviso: no has seleccionado ningún color.</p>";
        }
      }
    ?>
    <form action="#" method="post">
      Elige tus colores favoritos:<br>
      <input type="checkbox" name="colores[]" value="Rojo"> Rojo<br>
      <input type="checkbox" name="colores[]" value="Verde"> Verde<br>
      <input type="checkbox" name="colores[]" value="Azul"> Azul<br>
      <input type="checkbox" name="colores[]" value="Amarillo"> Amarillo<br>
      <input type="checkbox" name="colores[]" value="Negro"> Negro<br>
      <input type="submit" name="enviar" value="Enviar">
    </form>
  </body>
</html>
