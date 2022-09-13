<?php
session_start();
?>
<!Doctype html>
<html lang="en">
  <?php include_once('headtags.php')?>
  <body>
	<?php include_once('nav.php')?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
	 <div class="d-flex mt-4 justify-content-center">
	<div class="flex column">			
		<div class="card cont p-5 font-weight-bold mb-2">
		<form id="form-login">
			<h3 class="text-center">Login Here</h3>
		  <div class="form-outline mt-2 mb-4">
			<label class="form-label" for="username">Username</label>
			<input type="text"  name="username"id="username" class="form-control" placeholder="phone number" />
			
		  </div>

  
		  <div class="form-outline mb-4">
			<label class="form-label" for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="ddmmyyyy"/>
			
		  </div>
		  <div class="row mb-4">
			<div class="col">
			  Don't have an account ?<a href="reg.php">Sign-up</a>
			</div>
		  </div>
			<div class="d-grid gap-2 col-6 mx-auto">
				<button type="button" id="submit class="bg-primary btn sub_button">Sign in</button>
			</div>  
		</form>
		</div>
	</div>
</div>
  </body>
  <script>
 $(document).ready(function() { 

 $("#submit").click(function() {
	 

 var username = $("#username").val();
 var password = $("#password").val();
 
 
 if(username==''||password==''){
 alert("Please fill all fields.");
 return false;
 }
 if(username=='admin' && password=='admin'){
	 
	 window.location.href = 'dashboard.php';
 }else{
 
 $.ajax({
 type: "POST",
 url: "requests.php",
 data: {
 username: username,
 password: password
 },
 cache: false,
 success: function(data) {
	 
 if(data=="satyasairazole"){
	 window.location.href = 'welcomepage.php';
 }else{
	 alert("please check your Details");
 }
 },
 error: function(xhr, status, error) {
 console.error(xhr);
 }
 });
 }
 });
 
 });
</script>


</html>
