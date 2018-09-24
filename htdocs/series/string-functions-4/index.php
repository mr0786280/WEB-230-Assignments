<?php

$string = '  This is an example string. ';
$string_trimmed = rtrim($string);

echo $string_trimmed;

echo '</br>';

$string = 'This is a <img src="image.jpg"> string.';
$string_slashes = htmlentities (addslashes($string));

echo $string_slashes;

echo '</br>';

$string = 'This is a <img src="image.jpg"> string.';
$string_slashes = htmlentities ($string);

echo $string_slashes;

echo '</br>';

$string = 'This is a <img src="image.jpg"> string.';
$string_slashes = htmlentities(addslashes($string));

echo stripslashes ($string_slashes);

?>