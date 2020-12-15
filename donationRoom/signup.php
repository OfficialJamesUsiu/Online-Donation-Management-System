<!DOCTYPE html>
<html>
<head>
	<title>We-Support Donation Proof</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	#signup_form{
		width:500px;
		height:500px;
		position:relative;
		top:50px;
		background-color: skyblue;
		margin: auto;
		padding: auto;;
	}
</style>
</head>
<body>
<p style="padding-top: 20px;padding-left: 20px"><a href="../index.php"><i class="fa fa-home" aria-hidden="true" style="font-size: 30px;padding-right: 10px"></i>Back Home!!!</a></p>
<div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Create An Account to Confirm Donation or Contact Us </center></h2>
		<hr>
		<form method="POST" action="register.php">
		Name: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		Username: <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Sign Up</button> <a href="index.php"> Back to Login</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>