<?php 

include('config.php');
class User{

		public $db;

		public function __construct(){
			$this->db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}

function register($username,$password){
	
	$sql = "INSERT INTO USERS SET name ='$username', password ='$password' ";
	$result = mysqli_query($this->db,$sql) or die(mysqli_connect_errno()."Data cannot inserted");
        		return $result;
			
			
}
	
function login($username,$password){

$sql2 = "SELECT * FROM USERS where name = '$username' and  password ='$password'";
$result2 = mysqli_query($this->db,$sql2);

$user_data = mysqli_fetch_array($result2);



$count_row = $result2->num_rows;
if ($count_row == 1) {
                // this login var will use for the session thing
                 
                $_SESSION['login'] = true;
				$_SESSION['name'] = $user_data['name'];
				$_SESSION['password'] = $user_data['password'];
				$_SESSION['id'] = $user_data['id'];
                return true;

            }

            else{

                return false;

            }
}	

	
		
	 public function fetchdata()
 {
 $result4=mysqli_query($this->db,"select * from apps");
 return $result4;
 }





function insert($app_id,$user_id){
	
	$ret=mysqli_query($this->db,"insert into appuser(app_id,user_id) values('$app_id','$user_id')");
return $ret;
			
			
}


function delete_from_user($username){ 

$delete = mysqli_query($this->db,"DELETE FROM users WHERE name ='$username'");

}

function delete_from_app($name){ 

$delete = mysqli_query($this->db,"DELETE FROM apps WHERE name ='$name'");

}


public function fetch_users()
 {
 $result4=mysqli_query($this->db,"select * from users");
 return $result4;
 }

public function select_users($name)
 {
 $result4=mysqli_query($this->db,"select * from users where name = '$name'");
 return $result4;
 }

public function update_user($user,$id) {
	
	$edit = mysqli_query($this->db,"UPDATE  users SET name = '$user' where id ='$id'");
    return $edit;	
	
}




}



		
		
	

 	








?>