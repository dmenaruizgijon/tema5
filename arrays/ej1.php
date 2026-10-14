<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Temperaturas medias de la semana</h1>
    <?php
      
      $array = [18, 20, 19, 22, 24, 23, 21];

      
      $suma = 0;
    ?>
    <table border="1">
      <tr>
        <th>Día</th>
        <th>Temperatura</th>
      </tr>
      <?php
        foreach ($array as $indice => $temperatura) {

          echo "<tr>";
          echo "<td>Día ", $indice + 1, "</td>";
          echo "<td>", $temperatura, " ºC</td>";
          echo "</tr>";
          $suma = $suma + $temperatura;
        }


        $media = $suma / count($array);
      ?>
    </table>
    <p>Temperatura media semanal: <b><?= round($media, 2) ?> ºC</b></p>
  </body>
</html>
