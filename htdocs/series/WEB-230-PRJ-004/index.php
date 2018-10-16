 <?php

  	require_once('include/header.inc.php');
 
 ?>

<?php
	
	include('include/config.inc.php');
	
?>

<section>Please fill in the text fields.
	
	<form action="index.php" method="POST">
      <textarea name="user_input" rows="10" cols="60">
		  
                <?php
                     echo $user_input;
                ?>
      
      
      </textarea><br><br>
      <input type="submit" value="Review">
	</form>


	
</section>



<?php

	require_once('include/footer.inc.php');
     	
?>