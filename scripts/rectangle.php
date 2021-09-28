<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj bok b"><br><br>
      <input type="submit" value="Oblicz">
    </form>
    <?php
      if (!empty($_GET['sideA'])) {
        $sideA=str_replace(',', '.', $_GET['sideA']);
        $sideB=str_replace(',', '.', $_GET['sideB']);
        $area=$sideA*$sideB;
        $rectangle=2*$sideA+2*$sideB;
        echo <<< RESULT
          <hr>
          Pole prostokąta wynosi: $area cm<sup>2</sup><br>
          Obwód prostokąta wynosi: $rectangle cm
        RESULT;
      }
      else {
        echo "Wypełnij dane!";
      }
     ?>
  </body>
</html>
