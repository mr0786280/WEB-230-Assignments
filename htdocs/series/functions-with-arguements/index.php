<?php

$inumber1 =10;
$inumber2 = 5;

function add ($number1, $number2) {
 echo $number1 + $number2;
}

add ($inumber1, $inumber2);

echo '</br>';

function displayDate ($day, $date, $year) {
  echo $day,'  '.$date.'  '.$year;
}

displayDate ('Friday', 21, 2018);

?>
