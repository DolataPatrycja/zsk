<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Użytkownicy</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    require_once './scripts/connect.php';

    $sql = "SELECT * FROM `users`";
    $result = $connect->query($sql);
    if (isset($_GET['delete'])) {
      echo "Rekord usunięty prawidłowo użytkownika o id=".$_GET['delete']."<hr>";
    }
    echo <<< TABLE
    <table>
    <tr>
      <th>Id</th>
      <th>Id miasta</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>Data urodzenia</th>
    </tr>
    TABLE;

    while ($row = $result->fetch_assoc()) {
      echo <<< ROW
      <tr>
        <td>$row[id]</td>
        <td>$row[cityid]</td>
        <td>$row[name]</td>
        <td>$row[surname]</td>
        <td>$row[birthday]</td>
        <td><a href="./scripts/delete.php?id=$row[id]">Usuń</a></td>
      </tr>
      ROW;
    }
    echo "</table>";

    if (isset($_GET['error'])) {
      echo "<br>$_GET[error]<br>";
    }

    if (isset($_GET['addUser'])) {
      echo <<< FORMADDUSER
      <h4>Dodawanie użytkownika</h4>
        <form action="./scripts/insert.php" method="post">
          <input type="text" name="name" placeholder="Podaj imię"><br><br>
          <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
          <select name="cityid">
      FORMADDUSER;

      $sql="SELECT * FROM `cities` ORDER BY city";
      $result = $connect->query($sql);
      while ($city = $result->fetch_assoc()) {
          echo "<option value=\"$city[id]\">$city[city]</option>";
      }

      echo <<< FORMADDUSER
          </select><br><br>
          <input type="date" name="birthday">Data urodzenia<br><br>
          <input type="submit" value="Dodaj użytkownika">
          </form>
      FORMADDUSER;
    }
    else {
      echo '<br><a href="./4_bazy_tabela_delete_insert.php?addUser=">Dodaj użytkownika</a>';
    }

    $connect->close();
     ?>
  </body>
</html>
