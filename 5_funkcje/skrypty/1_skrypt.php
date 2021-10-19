<?php
 require_once '../funkcje/funkcje.php';
 show();
 if (!empty($_POST['name'])) {
   echo "<hr>Imię: " . showName($_POST['name']) . '<hr>';
   echo "Walidacja danych:<br>";
   echo stringValidate("  jaNUSZ ", 4) . ", długość: " . strlen(stringValidate("  jaNUSZ ", 4));
 }
 ?>
