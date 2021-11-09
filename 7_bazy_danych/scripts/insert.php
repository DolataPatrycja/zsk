<?php
if(isset($_POST)) {
  foreach ($_POST as $key => $value) {
    //echo "$key: $value<br>";
    if (empty($value)) {
      header("location: ../4_bazy_tabela_delete_insert.php?error=Wypełnij wszystkie dane w formularzu!");
      exit();
    }
  }
  require_once './connect.php';
  $sql="INSERT INTO `users` (`id`, `cityid`, `name`, `surname`, `birthday`) VALUES (NULL, '$_POST[cityid]', '$_POST[name]', '$_POST[surname]', '$_POST[birthday]');";
  $connect->query($sql);
  if ($connect->affected_rows == 1) {
    header("location: ../4_bazy_tabela_delete_insert.php?error=Prawidłowo dodano użytkownika");
  }
  else {
    header("location: ../4_bazy_tabela_delete_insert.php?error=Nie dodano użytkownika!&addUser=");
  }
}
  $connect->close();
 ?>
