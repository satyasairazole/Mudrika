<?php
	session_start();
	
	unset($_SESSION['username']);
	header("location:index.php");
	if(isset($_SESSION['admin'])){
		unset($_SESSION['admin']);
	}
	
?>