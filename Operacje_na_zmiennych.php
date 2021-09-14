<?php
echo PHP_VERSION; //8.0.10
echo 2**10; //1024

$x=100;
$y=10;
echo $x<=>$y; //lewe większe: 1, równe: 0, prawe większe: -1

//równe
$x=1;
$y=1.0;

echo gettype($x); //intiger
echo gettype($y); //doubble

if ($x==$y) {
  echo "Równe";
}else {
  echo "Różne";
}

//identyczne
if ($x===$y) {
  echo "Identyczne";
}else {
  echo "Różne";
}

//postinkrementacja $x++
//preinkrementacja ++$x
//postdekrementacja $x--
//predekrementacja --$x

$x=10;
$x=$x++;
echo $x; //10
$x=++$x;
echo $x; //11
$y=$x++;
echo $x; //12
echo $y; //11

$x=1;
echo $x; //1
$x=$x++;
echo $x; //1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$y=$x++;
echo $x; //4
echo $y; //3
 ?>
