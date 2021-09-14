<?php
echo "ZSŁ<br>";
echo "ZSŁ<br>";

$name="Anna";
echo 'Imię: $name<br>'; //Imię: $name
echo "Imię: $name<br>"; //Imię: Anna

//typy danych
//całkowity
$całkowita=10; //nazwy zmiennych w j.polskim ;)

$bin=0b1011; //11
$oct=010; //8
$hex=0x10; //16

echo $hex, "<br>";

//konkatynacja .
//interpolacja ,
echo "text". "text1", "text2<br>";

//zmiennoprzecinkowy
$x=10.5;

//logiczny
$prawda=true; //1
$fałsz=false; //nic nie wyświetli
echo "$fałsz<br>";

//składnia heredoc
$surname="Nowak";
echo <<< ETYKIETA
  <hr>
  Imię i nazwisko: $name $surname<br>
  Poznań<br>
ETYKIETA;

$text = <<< ETYKIETA
  <hr>
  Imię i nazwisko: $name $surname<br>
  Poznań<br>
ETYKIETA;

echo $text;

//nowdoc
echo <<< 'ETYKIETA'
  <hr>
  Imię i nazwisko: $name $surname<br>
  Poznań<br>
ETYKIETA;

echo "Imię użytkownika: $name, nazwa zmiennej imienia: \$name"

?>
