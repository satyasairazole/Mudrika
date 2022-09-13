 <?php
session_start();
?>
 <!doctype html>
<html lang="en">
  <?php include_once('headtags.php')?>
  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <?php include_once('nav.php');
  if(isset($_SESSION['username'])){
  ?>
  
		 <div class="container text-center">
		  <h3>Welcome</h3>
		  <p><em>to mudrika</em></p>
		  <?php echo "<h2>".$_SESSION['username']."</h2>";
  
		  ?>
		</div> 
	<div class="mt-4 pt-2 text-center">
               <a href="logout.php"> <input class="btn btn-primary btn-lg" type="submit" name='submit' id='reg' value="Logout" /></a>
              </div>
			<?php
  }else{
				header("location:index.php");
			}
			?>
</body>

</html>