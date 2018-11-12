<?php

// 01. Explain what the time function is.
echo time ();
// A: time() is a function that gives you the information you need to know about the current time and date. It doesn't arguments and it returns the integer representation for time.

echo '</br>';

echo 'The current time is '.time();

echo '</br>';

$time = time();
// 02. Explain what the following line of code is doing and how.
$actual_time = date('D M Y @ H:i:s', $time);
//A: This code displays the formatted current date and time. 

echo 'The current date and time is '.$actual_time;

echo '</br>';
// 03. Explain what the following line of code is doing and how.
echo '<h3>The current date/time is: '.$actual_time.'</h3>';
//A: This line of code echos out the date and time but with bigger font and bolded.

echo '</br>';
// 04. Explain a way the $actual_time might be used in a web application.
//A: The way that $actual_time could be used in web application is with time zones.

// 05. Explain a way the $time_modified might be used in a web application.

$time_now = date('d M Y @ H:i:s', $time);
$time_modified = date('d M Y @ H:i:s', $time);

echo 'The time now is '.$time_now.'<br>The time modified is '.$time_modified;
//A: Time modified could be used for timezones as well. 

?>
