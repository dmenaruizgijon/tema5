<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de la compra</h1>
    <?php
      $compra = ["Leche", "Pan", "Huevos", "Manzanas", "Arroz"];
    ?>

    <h2>Lista inicial (5 productos)</h2>
    <ul>
      <?php
        foreach ($compra as $producto) {
          echo "<li>", $producto, "</li>";
        }
      ?>
    </ul>

    <?php
      $compra[] = "Café";
    ?>

    <h2>Lista actualizada (6 productos)</h2>
    <ul>
      <?php
        foreach ($compra as $producto) {
          echo "<li>", $producto, "</li>";
        }
      ?>
    </ul>
  </body>
</html>
