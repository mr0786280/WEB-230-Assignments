<?php

$browser = get_browser(null, true);
print_r($browser);

echo '</br>';
echo '</br>';



$browser = strtolower($browser ['browser']);

if($browser!='default browser') {
  echo 'You\'re not using the Default Browser. Please do!';
} else {
  echo 'Good, correct browser. Now keep it that way. Firefox and Internet Explorer are trash.';
}










?>

