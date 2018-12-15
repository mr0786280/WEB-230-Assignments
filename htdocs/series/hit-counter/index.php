<?php 

require 'connect.inc.php';
$user_ip = $_SERVER ['REMOTE_ADDR'];

function ip_add($ip){
          
          global $con;
          
          $query = "INSERT INTO hits_ip VALUES ('$user_ip')";
          
          $query_run = mysql_query($con, $query);
               
}



function ip_exists($ip) {
         global $user_ip;
         $query = "SELECT ip FROM hits_ip WHERE ip = '$user_ip'";
         $query_run = mysql_query($query);
         $query_num_rows = mysql_num_rows($query_run);
         
         if(mysql_num_rows($query_run) === 0){

               return false;

          }else if(mysql_num_rows($query_run) >= 1){
			  
               return true;
			  
          }
}


function update_count(){
		global $con;
          
        $query = "SELECT count FROM hits_count";
          
		if($query_run = mysql_query($con, $query)){
     
              $count = mysql_fetch_row($query_run);
               
              $count_inc = $count +1;
           
            $query_update = "UPDATE hits_count SET count = '$count_inc'";
            
            if($query_update_run = mysql_query($con, $query_update)){
                              
				  echo $count_inc.'<br>COUNT HAS BEEN UPDATED<br>';
				  
              }
}
}


update_count();

if(!ip_exists($user_ip)){
	
          update_count();
	
          ip_add($user_ip);
	
}



?>

<h1> My Page </h1>