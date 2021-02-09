<!DOCTYPE html>
<html>
<head>
	<link rel= "icon" href="images/icon.png" type="image/x-icon">
	<title>Hugotees PH | Homepage</title>
	<link rel= "stylesheet" href= "style.css">
	<link rel= "stylesheet" href= "https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel= "stylesheet" href= "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<div class= "whole">
	<div class= "slider">
		<div class= "slides">
			<input type= "radio" name="radio-btn" id="radio1">
			<input type= "radio" name="radio-btn" id="radio2">
			<input type= "radio" name="radio-btn" id="radio3">
			<input type= "radio" name="radio-btn" id="radio4">

		<div class= "slide first">
			<a href="#"><img src="images/main-imgss/1.png" alt=""></a>
		</div>
		<div class= "slide">
			<img src="images/main-imgss/2.png" alt="">
		</div>
		<div class= "slide">
			<img src="images/main-imgss/3.png" alt="">
		</div>
		<div class= "slide">
			<img src="images/main-imgss/4.png" alt="">
		</div>

		<div class="navigation-auto">
			<div class= "auto-btn1"></div>
			<div class= "auto-btn2"></div>
			<div class= "auto-btn3"></div>
			<div class= "auto-btn4"></div>
		</div>
		</div>

		<div class="navigation-manual">
			<label for="radio1" class="manual-btn"></label>
			<label for="radio2" class="manual-btn"></label>
			<label for="radio3" class="manual-btn"></label>
			<label for="radio4" class="manual-btn"></label>
		</div>
	</div>
	</div>

	<script type= "text/javascript">
	var counter = 1;
	setInterval(function(){
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if(counter > 4){
			counter = 1;
			}
		}, 5000);
	</script>

	<div><h1> Welcome to <br>HUGOTEES PH site!</h1></div>
	<p class = "paragraph"> Label label label label label <br> 
				label label label label label label</p>

	<hr style="width:80%;text-align:center;color:black;">

</body>
</html>