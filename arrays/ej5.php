<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Índice y valor</h1>
    <?php
      $nombres = ["Lucía", "Carlos", "Marta", "Pablo", "Elena"];
    ?>
    <table border="1">
      <tr>
        <th>Índice</th>
        <th>Nombre</th>
      </tr>
      <?php
        foreach ($nombres as $indice => $nombre) {
          echo "<tr>";
          echo "<td>", $indice, "</td>";
          echo "<td>", $nombre, "</td>";
          echo "</tr>";
        }
      ?>
    </table>
  </body>
</html>
