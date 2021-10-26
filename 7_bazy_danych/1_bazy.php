<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "zsk_4cg2_baza1");

    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()) {
      echo <<< ROW
      Id: $row[id]<br>
      Imię: $row[name], nazwisko: $row[surname], data urodzenia: $row[birthday]
      <hr>
      ROW;
    }

     ?>
  </body>
</html>
