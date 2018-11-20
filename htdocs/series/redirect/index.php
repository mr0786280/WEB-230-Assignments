
<h1>My Page</h1>

<?php

$redirect_page = 'http://google.com';
$redirect = true;


if ($redirect==true) {
// 01. Explaine what is happening here.
//A1: The pages header is being modified. 

   header('Location: '.$redirect_page);
}






?>