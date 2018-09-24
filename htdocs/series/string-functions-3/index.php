<?php

$string_one = 'This is my essay. I am going to be talking about php.';
$string_two = 'This is my essay. I will be discussing the subject of php.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'When I get home, I will make sure to take a huge nap.';
$string_two = 'I will be looking for my pillows in order to begin my evening coma when I arrive home.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'Surfing the web at 3am is not a good idea, especially when I have a 9am class the next morning.';
$string_two = 'When I stay up until 3am on Tumblr in search of memes, I am making a grave mistake.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'I love the color purple.';
$string_two = 'Purple is my favorite color.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'Undertale is the best video I\'ve ever played.';
$string_two = 'The best video game in existance, in my opinion, is Undertale.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'I make a lot of typos.';
$string_two = 'I suck at spelling.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'I am hopefully not as bad as Jimmy though.';
$string_two = 'Jimmy might be worse.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'I love messing around with coding like this.';
$string_two = 'Coding like this is fun.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'I am constantly craving chocolate.';
$string_two = 'I really love chocolate.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'Hello.';
$string_two = 'Howdy!';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string_one = 'I really should work on the next part.';
$string_two = 'I really should begin the next part.';

similar_text($string_one, $string_two, $result);
echo 'The similarity between these phrases is  '.$result;

echo '</br>';

$string = 'This is the last string.';
$string_length = strlen($string);

echo $string_length;



?>