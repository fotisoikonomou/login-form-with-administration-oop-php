<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php 
session_start();
echo "this is user " . $_SESSION['name'] . "with id " .  $_SESSION['id'];


include_once('user.php');
$fetchdata=new User();

?>

   
<table width="100%"  border="0" id = "table">
  <tr>
    <th width="13%" scope="col">Name</th>
   <th width = "14%" scope ="col"></th>
  </tr>
  <?php
  $sql=$fetchdata->fetchdata();
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {  if($row['active']!=0){
 
  ?>
  <tr>
      <td height="29"><?php echo $cnt;?></td>
    <td><?php echo $row['name'];?></td>
	  <td><input type="hidden" class="form-control" id="app_id"  value ="<?php echo $row['id'];?>"></td>
	    <td><input type="hidden" class="form-control" id="user_id" value =" <?php echo $_SESSION['id'];?>"></td><td>
		<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave"></td>

  </tr>
  <?php $cnt=$cnt+1;}else { "echo ---";} } ?>
</table>




<script>
$(document).ready(function() {
	$("#table").on("click",'tr', function(){
    //$("#butsave").attr("disabled", "disabled");
	 var id = $(this).find("td:first-child").text();
          console.log(id);
          $(this).toggleClass("select");
		
		var app_id = $(this).find("td:first-child").text();
		var user_id = $('#user_id').val();
		$.ajax({
				url: "insert.php",
				type: "POST",
				data: {
					app_id: app_id,
					user_id: user_id,
								
				}
			})
			.done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
		
	});

});
</script>
</body>
</html>





