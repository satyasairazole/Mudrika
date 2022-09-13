<!doctype html>
<html lang="en">
  <?php include_once('headtags.php')?>
  <body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <?php include_once('nav.php')?>
  <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
            <form method='POST'>

              <div class="row">
                <div class="col-md-12 mb-4">

                  <div class="form-outline">
				  <label class="form-label" for="firstName">Name</label>
                    <input type="text" name="Fname" class="form-control form-control-lg" />
                    
                  </div>

                </div>
               
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
				  <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control form-control-lg" name="dob" />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="Female" checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                      value="Others" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
				  <label class="form-label" for="age">Age</label>
                    <input type="number" name="age" class="form-control form-control-lg" />
                    
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
				  <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="tel" name="phoneNumber" class="form-control form-control-lg" />
                    
                  </div>

                </div>
              </div>

              

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" name='submit' id='reg' value="Submit" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
include 'db.php';
if(isset($_POST['submit'])){
	$name=$_POST['Fname'];
	$age=$_POST['age'];
	$dob=$_POST['dob'];
	$gender=$_POST['inlineRadioOptions'];
	$phno=$_POST['phoneNumber'];
if($age==""||$name==""||$dob==""||$gender==""||$phno==""){
	echo"echo fill all the fields";
	return false;
}
	$tq=" insert into login(name,dob,gender,age,phno,admin) values('$name','$dob','$gender',$age,'$phno','newp');";
	$result=mysqli_query($con,$tq);
				if($result){
				echo"	<script> location.replace('index.php'); </script>";
				
				}
}else{
	
}

?>
</body>


<script>

/*$(document).ready(function() {	
 $("#reg").click(function() {
	alert("reg page");
 var name = $("#Fname").val();
 var dob= $("#dob").val();
 var Age = $("#age").val();
 var  phno= $("#phoneNumber").val();
 console.log('start');
 var g=document.getElementsByName('inlineRadioOptions');
 if(g[0].checked){
	 var sex=g[0].value;
 }else{
	 var sex=g[1].value;
 }
 alert(sex+dob+name+phno+Age);
 
 
 if(name==''||dob==''||age==''||phno=='') {
 alert("Please fill all fields.");
 return false;
 }else{
 alert('code sat');
 $.ajax({
 type: "POST",
 url: "requests.php",
 data: {
 Name: name,
 dob: dob,
 age: Age,
 phno: phno,
 gender:sex
 },
 cache: false,
 success: function(data) {
 console.log(data);
 },
 error: function(xhr, status, error) {
 console.error(xhr);
 }
 });
 }
 });
 
 });*/
</script>
</html>