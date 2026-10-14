<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Contador de pares e impares</h1>
    <?php
      for ($i = 0; $i < 20; $i++) {
        $numeros[$i] = rand(0, 50);
      }

      // Contadores
      $pares = 0;
      $impares = 0;

      echo "<b>Números generados:</b><br>";
      foreach ($numeros as $numero) {
        echo $numero, " ";

        if ($numero % 2 == 0) {
          $pares++;
        } else {
          $impares++;
        }
      }
    ?>
    <p>Cantidad de números pares: <b><?= $pares ?></b></p>
    <p>Cantidad de números impares: <b><?= $impares ?></b></p>
  </body>
</html>
