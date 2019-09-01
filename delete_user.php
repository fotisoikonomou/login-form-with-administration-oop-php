<?php 

include_once('user.php');

$username=$_GET['name'];

$delete = new User();
 $del = $delete->delete_from_user($username);
 if ($del) {


 echo 'deleted  successfully <a href="admin.php">Click here</a> to return';
 } else {

 echo 'delete  failed.';

}

?>