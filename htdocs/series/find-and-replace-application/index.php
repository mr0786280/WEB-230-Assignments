<?php

// 01.Explain why we are creating the $offset variable and what it is being used for.
// A1: This is important with the substring function. We use the offset is what we use to find the word in the string that's been input in the field. This is what is needed to help replace the word.
$offset = 0;

// 02.Explain what we are doing in the if statement and why we would do it.
// A2: This is refering to what's in the form. This is checking to see if the user has input any data in the fields.
if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])) {

// 03.Provide a reason why we would make a variable to capture a variable we could already use.
// A3: We use these to check if the user has put anything in and to avoid any errors, the variables are put inside the if statement.
  $text = $_POST['text'];
  $search = $_POST['searchfor'];
  $replace = $_POST['replacewith'];

// 04.Explain why we need to create this variable $search_length.
// A4: This is to return the length of the string in an integer. We created the variable to match the one listed below.
  $search_length = strlen($search);

  if (!empty($text)&&!empty($search)&&!empty($replace)) {

    while($strpos = strpos($text, $search, $offset)) {
  // 05.Explain why we change the value of the $offset variable here.
  // A5: This calcutes the amount of spaces of the data input, and the length. (I think)
      $offset = $strpos + $search_length;

// 06.Explain what we are doing here to the $text variable.
// A6: This is here so that what is in 'find' is going to be replaces.
      $text = substr_replace($text, $replace, $strpos, $search_length);
    }

    echo $text;

} else {
// 07.Explain why we include this here.
// A7: We include this here as a way to tell the user: "Don't leave anything blank please. Make sure to fill in all fields." in case they have something blank that should be filled in.
  echo 'Please fill in all fields.';
  }
}

?>

<hr>

// 08.Explain the action and method attributes.
// A8: Action tells the page where to go, the method tells it how, whether it's with get or post.
<form action="index.php" method="POST">


      <textarea name="text" rows="6" cols="30"></textarea><br><br>

      Search for:<br>
      <input type="text" name="searchfor"><br><br>

      Replace with:<br>
      <input type="text" name="replacewith"><br><br>

// 09.Explain what the type and value attributes are and do.
// A9: Type and value help shape the button and what it will do.
      <input type="submit" value="Find and Replace">

</form>