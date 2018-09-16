<?php

$number1 = 10;

if ($number1>=10) {
  echo 'True';
}

echo '</br>';

$number1 = 654;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
}

echo '</br>';

$number1 = 10000;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper;
}

echo '</br>';

$number1 = 750;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper;
}

echo '</br>';

$number1 = -100;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper;
}

echo '</br>';

$number1 = 500;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper;
}

echo '</br>';

$number1 = 500;

$upper = 1000;
$lower = 500;

if ($number1>$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper;
}

echo '</br>';

$number1 = 500;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper.', inclusive.';
}

echo '</br>';

$number1 = 90;

$upper = 1000;
$lower = 500;

if ($number1>=$lower && $number1<=$upper) {
  echo 'Okie dokie';
} else {
  echo 'Number must be between '.$lower.' and '.$upper.', inclusive.';
}

echo '</br>';

$number = 500;

$canbe1 = 2;
$canbe2 = 4;

if ($number==$canbe1||$number==$canbe2) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 2;

$canbe1 = 2;
$canbe2 = 4;

if ($number==$canbe1||$number==$canbe2) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 4;

$canbe1 = 2;
$canbe2 = 4;

if ($number==$canbe1||$number==$canbe2) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 6;

$canbe1 = 2;
$canbe2 = 4;

if ($number==$canbe1||$number==$canbe2) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 2;

$canbe1 = 2;
$canbe2 = 4;

if (!($number==$canbe1)||!($number==$canbe2)) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 4;

$canbe1 = 2;
$canbe2 = 4;

if (!($number==$canbe1)||!($number==$canbe2)) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 10;

$canbe1 = 2;
$canbe2 = 4;

if (!($number==$canbe1)||!($number==$canbe2)) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

$number = 10;

$canbe1 = 2;
$canbe2 = 4;

if (!($number==$canbe1)&& !($number==$canbe2)) {
  echo 'Okie dokie';
} else {
  echo 'Not okie dokie';
}

echo '</br>';

?>