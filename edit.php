<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php 
include_once('user.php');
$fetchdata = new User();?>
  <table width="100%"  border="0" id = "table">
  <tr>
    <th width="13%" scope="col">Name</th>
   <th width = "14%" scope ="col"></th>
  </tr>
  <?php
  $sql=$fetchdata->fetch_users();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  { 
  ?>
  <tr>
      <td height="29"><?php echo $cnt;?></td>
	   <td><input type="text" class="form-control"  id="id" value ="<?php echo $row['id'];?>" /></td>
	  <td><input type="text" class="form-control"  id="name" value ="<?php echo $row['name'];?>" /></td>
   
  <!--<td><input type="button" name="delete" class="btn btn-primary" value="Delete from database" id="delete"></td>-->
<?php echo "<td><a href='edit_user.php?name=".$row['name']."'>edit</a></td>"; //if you want to delete based on staff_id
 ?>
  </tr>
  <?php $cnt=$cnt+1;} ?>
</table>

<script>
$(document).ready(function() {
	$("#table").on("click",'tr', function(){

	var name = $('#name').val();
	var id = $('#id').val();
		$.ajax({
				url: "edit_user.php",
				type: "POST",
				data: {
					name:name,
					id:id,
								
				}
			})
			.done(function( msg ) {
    alert( "Data deleted: " + msg );
  });
		
	});

});
</script>


</body>
</html>