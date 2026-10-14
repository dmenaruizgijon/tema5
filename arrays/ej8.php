<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ejercicio 8 · Notas de un alumno</title>
  </head>
  <body>
    <h1>Notas de un alumno</h1>
    <?php
      if (isset($_POST['notas'])) {
        $notas = $_POST['notas'];


        $suma = 0;
        $maxima = $notas[0];
        $minima = $notas[0];

        foreach ($notas as $nota) {
          $suma = $suma + $nota;

          if ($nota > $maxima) {
            $maxima = $nota;
          }
          if ($nota < $minima) {
            $minima = $nota;
          }
        }

        $media = $suma / count($notas);

        echo "<p>Nota media: <b>", round($media, 2), "</b></p>";
        echo "<p>Nota máxima: <b>", $maxima, "</b></p>";
        echo "<p>Nota mínima: <b>", $minima, "</b></p>";
      }
    ?>
    <form action="#" method="post">
      Introduzca las cinco notas:<br>
      <input type="number" name="notas[]" min="0" max="10"><br>
      <input type="number" name="notas[]" min="0" max="10"><br>
      <input type="number" name="notas[]" min="0" max="10"><br>
      <input type="number" name="notas[]" min="0" max="10"><br>
      <input type="number" name="notas[]" min="0" max="10"><br>
      <input type="submit" value="Calcular">
    </form>
  </body>
</html>
