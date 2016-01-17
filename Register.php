<?php require 'C:\wamp\www\CDSnow\Connect\connect.php'; ?>
<?php

	if(isset($_POST['Register'])) {
	
		session_start();
		$Fname = $_POST['Firstname'];
		$Lname = $_POST['Lastname'];
		$Mainnum = $_POST['Mainnum'];
		$Secnum = $_POST['Secnum'];
		$Email = $_POST['Email'];
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
	
		mysqli_query($con,"INSERT INTO user (Fname, Lname, Mainnum, Secnum, Email, Username, Password)Values('{$Fname}', '$Lname', '$Mainnum', '$Secnum', '$Email', '$Username', '$Password')");
		
		header('Location: Login.php');
	
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
							<img src="prime.fw.png"><span class="sub">San Diego</span>
							<hr class="page-divider">
						</div>
						<div class="contactForm">
						
						<script>
						
							function validation(){
								
									var FN = document.getElementById('Firstname');
									var LN = document.getElementById('Lastname');
									var EM = document.getElementById('Email');
									var MN = document.getElementById('Mainnum');
									var user = document.getElementById('Username');
									var pass = document.getElementById('Password');
									var passcon = document.getElementById('PasswordConfirm');
									
									if(FN.value == ''){
										alert('Please Enter in your First Name!');
										FN.focus();
										return false;
									}
									
									if(LN.value == ''){
										alert('Please Enter in your Last Name!');
										LN.focus();
										return false;
									}
									
									if(EM.value == ''){
										alert('Please Enter in your Email!');
										EM.focus();
										return false;
									}
									
									if(MN.value == ''){
										alert('Please Enter in a Primary Contact Number!');
										MN.focus();
										return false;
									}
									
									if(user.value == ''){
										alert('Please Enter in your Username!');
										user.focus();
										return false;
									}
									
									if(pass.value == ''){
										alert('Please Enter in Your Password!');
										pass.focus();
										return false;
									}
									
									if(pass.value != passcon.value){
										alert('Passwords Do Not Match! Please try again!');
										focus();
										return false;
									}
							}
						
						</script>

							<div class="container" id="wrap">
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<form action="#" method="post" accept-charset="utf-8" class="form" role="form" onsubmit="return validation()">
											<h4>Please be sure to complete the form by entering in the fields below.</h4>
											<!--Name-->
											<div class="row">
												<div class="col-xs-6 col-md-6" id="first">
													<input type="text" name="Firstname" id="Firstname" class="form-control input-lg" placeholder="First Name"/>
												</div>
												<div class="col-xs-6 col-md-6" id="last">
													<input type="text" name="Lastname" id="Lastname" class="form-control input-lg" placeholder="Last Name"/>  
												</div>
											</div>
											<!--Number-->
											<div class="row">
												<div class="col-xs-6 col-md-6" id="main">
													<input type="text" name="Mainnum" id="Mainnum" class="form-control input-lg" placeholder="Primary Phone Number"/>
												</div>
												<div class="col-xs-6 col-md-6" id="secondary">
													<input type="text" name="Secnum" id="Secnum" class="form-control input-lg" placeholder="Secondary Phone Number"/>  
												</div>
											</div>
											<!--Email-->
											<div class="row">
												<div class="col-xs-6 col-lg-12" id="email">
													<input type="text" name="Email" id="Email" class="form-control input-lg" placeholder="Email Address"/>
												</div>
											</div>
											<!--Username-->
											<h4>Please use your company email as your username</h4>
											<div class="row">
												<div class="col-xs-6 col-lg-12" id="user">
													<input type="text" name="Username" id="Username" class="form-control input-lg" placeholder="User Name"/>
												</div>
											</div>
											<!--Password-->
											<div class="row">
												<div class="col-xs-6 col-md-6" id="pass">
													<input type="password" name="Password" id="Password" class="form-control input-lg" placeholder="Password"/>
												</div>
												<div class="col-xs-6 col-md-6" id="pass">
													<input type="password" name="Password" id="PasswordConfirm" class="form-control input-lg" placeholder="Confirm Password"/>
												</div>
											</div>
											<div class="help"><h6>By clicking Register, you agree to our Terms, and that you have read our Data Use Policy, including our Cookie Use.</h6></div>
											<input name="Register" type="submit" class="btn btn-lg btn-success btn-block" value="Register">
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
