<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/icon.png" type="image/x-icon">
	<title>Hugotees PH | Login</title>
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
		<h2>Login</h2>
	</div>
	
	<form method= "post" action="account-login.php">
		<div class = "input-group">
			<label>Email</label>
			<input type= "text" name= "email">
		</div>

		<div class = "input-group">
			<label>Password</label>
			<input type= "password" name= "password1">
		</div>
		<div class = "input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>Don't have an account yet? <a href="account-register.php">Register Now</a></p>

	</form>
</body>
</html>