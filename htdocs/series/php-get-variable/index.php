<?php
// 01. Explain what the following if statement is doing.
// A1: It's telling the server to send back a given resource. 

if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year'])) {
     $day = $_GET['day'];
     $date = $_GET['date'];
     $year = $_GET['year'];
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