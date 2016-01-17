<?php require 'CDSnow/Connect/connect.php'; ?>
<?php

	if(isset($_POST['Register'])) {
	
		session_start();
		$Fname = $_POST['Fisrtname'];
		$Lname = $_POST['Lastname'];
		$Mainnum = $_POST['Mainnum'];
		$Secnum = $_POST['Secnum'];
		SEmail = $_POST['Email'];
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];
	
		$sql = Scon->query("INSERT INTO users (Fname, Lname, Mainnum, Secnum, Email, Uname, Password)Values('{$Fname}', '{$Lname}', '{$Mainnum}', '{$Secnum}', '{$Email}', '{$Username}', '{$Password}')");
	
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
							<h1>Prime Now <span class="sub">San Diego</span></h1>
							<hr class="page-divider">
						</div>
						<div class="contactForm">
						
						<script>
						
							function validation(){
								
									var user = document.getElementById('Username');
									var pass = document.getElementById('Password');
									
									if(user.value == ''){
										alert('Please Enter in your Username or Email!');
										return false;
									}
									
									if(pass.value == ''){
										alert('Please Enter in Your Password!');
										return false;
									}
							}
						
						</script>

							<div class="container" id="wrap">
								<div class="row">
									<div class="col-md-6 col-md-offset-3">
										<form action="*" method="get" accept-charset="utf-8" class="form" role="form" onsubmit="return validation()">
											<h4>Please log in using the fields below, or <a href="sign-up.html">Sign Up</a> now for access.</h4>
											<div class="row">
												<div class="col-xs-6 col-md-6 col-md-offset-3" id="user">
													<input type="text" name="username" id="Username" class="form-control input-lg" placeholder="Username or Email"/>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-6 col-md-6 col-md-offset-3" id="pass">
													<input type="password" name="password" id="Password" class="form-control input-lg" placeholder="Password"/>  
												</div>
											</div>
											<div class="help"><h6>By clicking Submit, you agree to our Terms, and that you have read our Data Use Policy, including our Cookie Use.</h6></div>
											<input name="signup" type="submit" class="btn btn-info" value="Submit Button">
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
