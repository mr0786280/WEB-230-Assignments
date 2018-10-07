<?php

$string = 'This is a string.';

if (preg_match('/no/', $string)) {
  echo 'Match found.';
} else {
  echo 'No match found.';
}

echo '</br>';

$string = 'This is a string.';

if (preg_match('/a/', $string)) {
  echo 'Match found.';
} else {
  echo 'No match found.';
}

echo '</br>';










?>