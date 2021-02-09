<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/icon.png" type="image/x-icon">
	<title>Hugotees PH | Register</title>
	<link rel= "stylesheet" href= "style.css">
	<link rel= "stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<div class = "dropdown">
		<nav>
			<a href="index.php"><img class= "logo" src="images/logo.png"></a>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">Products <i class= "fas fa-caret-down"></i></a>
				<ul>
				<li><a href="#">Couple</a></li>
				<li><a href="#">Family Bundle</a></li>
				<li><a href="#">Personalized</a></li>
				<li><a href="#">Pocketees</a></li>
				</ul>
			</li>
			<li><a href="#">Contact</a></li>
			<li><a href="account-login.php">Account</a></li>
			</ul>
		</nav>
	</div>

	<div class = "header">
		<h2>Register</h2>
	</div>
	
	<form method= "post">
		<div class = "input-group">
			<label>Full Name</label>
			<input type= "text" name= "fullname">
		</div>
		<div class = "input-group">
			<label>Username</label>
			<input type= "text" name= "username">
		</div>
		<div class = "input-group">
			<label>Email</label>
			<input type= "text" name= "email">
		</div>
		<div class = "input-group">
			<label>Contact Number</label>
			<input type= "text" name= "contactnumber">
		<div class = "input-group">
			<label>Address</label>
			<input type= "text" name= "address">
		</div>
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type= "password" name= "password1">
		</div>
		<div class = "input-group">
			<label>Confirm Password</label>
			<input type= "password" name= "password2">
		</div>
		<div class = "input-group">
			<button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>Already have an account? <a href="account-login.php">Login Now</a></p>
	</form>

	<?php
		$DBHost = "localhost:3308";
		$DBUser = "root";
		$DBPass = "";
		$DBName = "db_hugotees";
		
		$conn = mysqli_connect($DBHost, $DBUser, $DBPass, $DBName);

		if(!$conn){
		die("Connection failed: " . mysqli_error());
		}

		//REGISTER BUTTON
		if(isset($_POST['register'])!=''){
		$errZip = "";
		if($_POST['fullname']==""){
		$errZip = "";
		echo "Fill Full Name first<br>.";
		}
		if($_POST['username']==""){
		$errZip = "";
		echo "Fill Userame first<br>.";
		}
		if($_POST['email']==""){
		$errZip = "";
		echo "Fill Email first<br>.";
		}
		if($_POST['contactnumber']==""){
		$errZip = "";
		echo "Fill Contact Number first<br>.";
		}
		if($_POST['address']==""){
		$errZip = "";
		echo "Fill Address first<br>.";
		}
		else{
		$sql = "INSERT into `tbl_accounts`(`user_FullName`, `user_Username`, `user_Email`, `user_ContactNumber`, `user_Address`, `user_Password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[contactnumber]','$_POST[address]','$_POST[password1]')";
		$result = mysqli_query($conn,$sql);
		echo"<br>Recorded";
		}
		}
	?>
	
</body>
</html>