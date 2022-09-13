<?php
session_start();
include 'db.php';
if(isset($_POST['Name'])){
	echo"satyasai";
}else{

}
if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$date=date_create($password);
	//$pswd=date_format($date,"dmY");
	
	$query="select * from login";
							$qu=mysqli_query($con,$query);
							if($qu){
								
							while($row=mysqli_fetch_array($qu)){
								$date=date_create($row['dob']);
								$cpswd=date_format($date,"dmY");
								
								if($username==$row['phno']&&$password==$cpswd){
									echo "satyasairazole";
								
									$_SESSION['username']=$row['name'];
								}else{
									
								}
								}
							}else{
								echo "query is not working";
							}
}else{
	
}
if(isset($_POST['Del_btn'])){
	$username=$_POST['Del_btn'];
	echo $username;
	$delnotify="update login set admin='0' where name='$username'";
							$qu=mysqli_query($con,$delnotify);
							if($qu){
								echo "deleted";
							}else{}
}else{
	
}


	?>