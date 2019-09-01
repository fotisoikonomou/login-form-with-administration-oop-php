<?php 
include_once('user.php');

if (isset($_POST['update']))
{




$name = ($_POST['name']);
$id = ($_POST['id']);
$update = new User();
 

if ($name == '')
{

$error = 'ERROR: Please fill in name!';

echo $error;
}
else
{

$edit = $update->update_user($name,$id);


}


}

else { echo "You have an error"; }


?>