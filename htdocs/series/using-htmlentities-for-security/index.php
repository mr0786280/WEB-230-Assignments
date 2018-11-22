<?php


if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
// 01. Explain what htmlentities is doing.
// A1: It's keeping the user from being able to display any html on the page where it's not supposed to be.
     $day = htmlentities($_GET['day']);
     $date = htmlentities($_GET['date']);
     $year = htmlentities($_GET['year']);
     if (!empty($day)&&!empty($date)&&!empty($year)) {
       echo 'It is '.$day.' '.$date.' '.$year;
     } else {
       echo 'Fill in all the fields.';
     }
}


?>

<form action="index.php" method="GET">

      Day:  <br><input type="text" name="day"><br>
      Date: <br><input type="text" name="date"><br>
      Year: <br><input type="text" name="year"><br>
      <br><input type="Submit" value="Submit">

</form>