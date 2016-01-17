<?php
		
$con = mysqli_connect("localhost","root","","UserList");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['Login'])){

$username = mysqli_real_escape_string($con,$_POST['Username']);

$pass = mysqli_real_escape_string($con,$_POST['Password']);

$sel_user = "SELECT * FROM user WHERE Username='$username' AND Password='$pass'";

$run_user = mysqli_query($con, $sel_user) or die ("error");

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['Fname'];

echo "<script>window.open('Account-Dashboard.html','_self')</script>";

}

else {

echo "<script>alert('Email or Password is not correct, try again!')</script>";

}

}

?>


<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
	<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="style.css">
	<title>CDS | PN San Diego</title>
</head>

<body>

<!--Landing Page-->

	<!--Header-->
	<div class="title">
		<div class="bg-overlay">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="header">
							<<img src="prime.fw.png"><span class="sub">San Diego</span>
							<hr class="page-divider">
						</div>
						<div class="contactForm">
						
						<script>
						
							function validation(){
								
									var user = document.getElementById('Username');
									var pass = document.getElementById('Password');
									
									if(user.value == ''){
										alert('Please Enter in your Username or Email!');
										user.focus();
										return false;
									}
									
									if(pass.value == ''){
										alert('Please Enter in Your Password!');
										pass.focus();
										return false;
									}
							}
						
						</script>

							<div class="container" id="wrap">
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<form action="Login.php" method="post" accept-charset="utf-8" class="form" role="form" onsubmit="return validation()">
											<h4>Please log in using the fields below, or <a href="Register.php">Sign Up</a> now for access.</h4>
											<div class="row">
												<div class="col-xs-6 col-md-6 col-md-offset-3" id="user">
													<input type="text" name="Username" id="Username" class="form-control input-lg" placeholder="Username or Email"/>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-6 col-md-6 col-md-offset-3" id="pass">
													<input type="password" name="Password" id="Password" class="form-control input-lg" placeholder="Password"/>  
												</div>
											</div>
											<div class="help"><h6>By clicking Login, you agree to our Terms, and that you have read our Data Use Policy, including our Cookie Use.</h6></div>
											<input name="Login" type="submit" class="btn btn-info" value="Login">
										</form>          
									</div>
								</div>            
							</div>
						</div>
						<!--Ends Contact Form-->
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>
