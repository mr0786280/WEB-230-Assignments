// 01. Explaine why we use ob_start.
//A1: This is to turn output buffering on. This doesn't output anything but the page output will be stored in an internal buffer instead of as a header.  
<?php ob_start(); ?>

<h1>My Page</h1>
This is my page.

<?php

$redirect_page = 'http://google.com';
$redirect = true;


if ($redirect==true) {
// 02. Explaine what is happening here.
//A2: Page is being redirected/modified.
   header('Location: '.$redirect_page);
}

// 03. Explaine why we use ob_end_flush.
//A3: This is to display any text that if the redirect is false. If it was clean, nothing would be displayed.
ob_end_flush();




?>