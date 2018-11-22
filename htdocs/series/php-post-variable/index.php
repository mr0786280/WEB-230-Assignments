<?php
// 01. Explain what this variable will be used for and how.
// A1: This is used as the set password, so that if this what is typed in, it will echo 'That is correct.' It's the set password and in order for it to be correct or granted access, $password must match with $match.

$match = 'pass123';

if(isset($_POST['password'])) {
  $password = $_POST['password'];
  $msg = '';
  $msgType = 'success';
// 02. Explain the process of the following if statment.
// A2: This is saying that should the field be blank and there's no password put it, it's going to each 'Please enter a password.'
  if(!empty($password)) {
    
      if ($password==$match) {
         echo 'That\'s correct.';
         } else {
         echo 'That\'s incorrect.';
         }
      } else {
        echo 'Please enter a password.';
    }
  }


?>

<form action="index.php" method="POST">

      Password:<br>
      <input type="password" name="password"><br><br>
      <input type="submit" value="submit"

</form>