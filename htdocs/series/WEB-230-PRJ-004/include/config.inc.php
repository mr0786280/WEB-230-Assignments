<?php
     
     $user_input='';
     $find = array('Acme');

     $replace = array ('Insights');
     
     

     if (isset($_POST['user_input'])&&!empty($_POST['user_input'])) {
        $user_input = $_POST['user_input'];
        $user_input_new = str_ireplace($find, $replace, $user_input);

        echo $user_input_new;

     }

?>