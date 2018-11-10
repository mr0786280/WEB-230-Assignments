<?php

// 01. Explain what the if statment is doing here.

if (isset($_POST['roll'])) {
  echo 'Clicked.';
}
//A: This is an if statement that goes with the form below. "If the button is clicked, generate the number."

echo '</br>';


// 02. Explain what the rand function is.
$rand = rand();
echo 'You rolled a '.$rand;
//A: rand() is a function that generates a random number.


echo '</br>';

// 03. Explain a way the $rand might be used in a web application.
//A: When uploading files, this function can be used to generate random integers or characters. 


echo '</br>';

?>

<form action="index.php" method="POST">

      <input type="submit" name="roll" value="Roll dice.">

</form>