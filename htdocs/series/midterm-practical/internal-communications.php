<?php include_once('include/header.inc.php'); ?>


<div style="text-align:center;padding:20px;">
	
<?php
	
	 $user_input=' ';
		 
     $find = array('Acme');

     $replace = array ('Insights');

	 $value= ("php_vaiable_with_returned_text");
     
     

     if(isset($_POST['user_input'])&&!empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];
        $user_input_new = str_ireplace($find, $replace, $user_input);

        echo $user_input_new;
     }
	
?>	


	<form action="internal-communications.php" method="POST">
      <textarea name="user_input" rows="10" cols="60"></textarea><br><br>
      <input type="submit" value="Review">
	</form>
	
</div>

<?php 


include_once('include/footer.inc.php');


?>


