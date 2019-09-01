<?php 
include_once('user.php');
$fetchdata=new User();
          
          $query = "INSERT INTO testtable VALUES (1);";
           mysqli_query($fetchdata, $query);  

?>