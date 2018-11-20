<?php

require 'config.inc.php';

// 01. Explain what this foreach loop is doing.
//A1: This loop is blocking the ip address.
foreach($ip_blocked as $ip) {
   if($ip==$ip_address) {
     die('Your IP address, '.$ip_address.' has been blocked. Go away.');
   }
}


//echo $ip_address;


?>

<h1>Welcome</h1>