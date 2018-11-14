<?php

     include 'config.inc.php';

// 01. Explain the $_SERVER['SCRIPT_NAME']

  $script_name = $_SERVER['SCRIPT_NAME'];

//A. This gives the value of the server name as defined in host configuration.



// 02. Explain what is happening to reduce the resulting output of the $images variable.

   echo $images;

// A: By doing "echo $images" the code finds what it needs to without much work to be done and problems




  //03. Explain how using the $script_name variable benefits us. -->
  //A. This is beneficial to have in the code because if we wanted to have users input a password, using a form with this in it will let them log in without taking them to another page.
?>
<form action="<?php echo $script_name; ?>" method="POST">
    <input type="submit" name="submit" value="Submit">
</form>