<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Números, cuadrados y cubos</h1>
    <?php
      for ($i = 0; $i < 12; $i++) {
        $numeros[$i] = rand(1, 20);
      }
    ?>
    <table border="1">
      <tr>
        <th>Número</th>
        <th>Cuadrado</th>
        <th>Cubo</th>
      </tr>
      <?php
        foreach ($numeros as $numero) {
          
          echo "<tr>";
          echo "<td>", $numero, "</td>";
          echo "<td>", $numero * $numero, "</td>";
          echo "<td>", $numero * $numero * $numero, "</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
