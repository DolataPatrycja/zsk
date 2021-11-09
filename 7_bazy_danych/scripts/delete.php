<?php
if($_GET['id']) {
  $id = $_GET['id'];
  require_once './connect.php';
  $sql = "DELETE FROM `users` WHERE `users`.id=$id";
  $connect->query($sql);
  if ($connect->affected_rows) {
    echo "Usunięto rekord";
    header("location: ../3_bazy_tabela_delete.php?delete=$id");
  }
  else {
    echo "Rekord nie został usunięty";
  }
  $connect->close();
}
else {
  header('location: ../3_bazy_tabela_delete.php');
}
 ?>
