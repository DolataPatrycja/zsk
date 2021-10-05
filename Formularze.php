<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <?php
    if (empty($_POST['person']) && empty($_POST['buttonAvg'])) {
      echo <<< FORMULARZ
      <h3>Ilość osób w rodzinie</h3>
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
        <input type="submit" value="Zatwierdź">
      </form>
      FORMULARZ;
    }
    else if(!empty($_POST['person'])) {
      echo "<h3>Ilość osób w rodzinie: ".$_POST['person']. "</h3>";
      echo '<form method="post">';
      for ($i=1; $i <= $_POST['person']; $i++) {
        echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby nr $i'><br><br>";
      }
      echo '<input type="submit" value="Zatwierdź" name="buttonAvg">';
      echo '</form>';
    }
      if (isset($_POST['buttonAvg'])) {
        $avg = 0;
        $count = 0;
        foreach ($_POST as $key => $value) {
          if ($key != 'buttonAvg') {
            $avg += $value;
            $count++;
          }
        }
        echo "Średni wiek: " . number_format($avg/$count, 2);
        echo "<br><a href='./Formularze.php'>Strona główna</a>";
      }
     ?>
  </body>
</html>
