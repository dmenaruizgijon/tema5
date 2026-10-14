<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>Productos con precio</h1>
    <?php
      $productos = [
        "Ratón"    => 12.50,
        "Teclado"  => 25.99,
        "Monitor"  => 149.90,
        "Webcam"   => 39.95,
        "Alfombrilla" => 6.75
      ];

      $suma = 0;
      $precioMaximo = 0;
      $productoMasCaro = "";
    ?>
    <table border="1">
      <tr>
        <th>Producto</th>
        <th>Precio</th>
      </tr>
      <?php
        foreach ($productos as $producto => $precio) {
          echo "<tr>";
          echo "<td>", $producto, "</td>";
          echo "<td>", $precio, " €</td>";
          echo "</tr>";

          
          $suma = $suma + $precio;

          
          if ($precio > $precioMaximo) {
            $precioMaximo = $precio;
            $productoMasCaro = $producto;
          }
        }

        $media = $suma / count($productos);
      ?>
    </table>
    <p>Precio medio: <b><?= round($media, 2) ?> €</b></p>
    <p>Producto más caro: <b><?= $productoMasCaro ?></b> (<?= $precioMaximo ?> €)</p>
  </body>
</html>
