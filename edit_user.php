<?php 

include_once('user.php');

$name=$_GET['name'];

$edit = new User();
 $edituser = $edit->select_users($name);
 
foreach ($edituser as $res) {
    $id = $res['id'];
	$name = $res['name'];
    
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="editaction.php">
        <table border="0">
            
			<tr> 
                <td>id</td>
                <td><input type="text" name="id" value="<?php echo $id;?>"></td>
            </tr>
			
			<tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
           
            <tr>
                
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
