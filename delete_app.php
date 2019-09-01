<?php 

include_once('user.php');

$name=$_GET['name'];

$delete = new User();
 $del = $delete->delete_from_app($name);
 if ($del) {


 echo 'deleted  successfully <a href="admin.php">Click here</a> to return';
 } else {

 echo 'delete  failed.';

}

?>