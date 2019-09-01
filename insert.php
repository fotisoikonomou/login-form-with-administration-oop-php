<?php
session_start();
echo "this is user " . $_SESSION['name'] . "with id " .  $_SESSION['id'];
include_once('user.php');
$app_id=$_POST['app_id'];
$user_id=$_SESSION['id'];

$insertdata=new User();

$sql=$insertdata->insert($app_id,$user_id);
if($sql)
{
echo "Data inserted" . $app_id;
}
else
{
echo "Data not inserted";
}

 ?>