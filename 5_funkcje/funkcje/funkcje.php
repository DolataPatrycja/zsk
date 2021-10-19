<?php
 function show() {
   echo "show";
 }

 function showName($name) {
   return $name;
 }

 /*
  zdefiniuj funkcję o nazwie stringValidate, która wykona następujące działania:
  1) usunie białe znaki (trim)
  2) zamieni pierwszą literę na dużą (ucfirst)
  3) od drugiej litery małe znaki (strtolower)
  4) drugi parametr będzie określał długość stringa (substr)
  strten() ==> długość stringa
*/
  function stringValidate($name, $len) {
    return substr(ucfirst(strtolower(trim($name))), 0, $len);
  }
 ?>
