<?php

 $string = 'This is an example string & this is a tutorial .';
 $string_word_count = str_word_count($string, 1,'&.');

print_r ($string_word_count);

echo '</br>';

$string = 'I love taking naps.';
$string_reversed = strrev($string);
echo $string_reversed;

?>