<!DOCTYPE HTML>
<?php 
include("includes/db.php");
include("functions/functions.php");
?>


<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="style_login.css" media = "all"> </link>
		<title>Online Tests</title>
		
	</head>
	
<body>
	<div class="container-fluid body-content">
		<div id="login-profile"> 
			<a href="/html_pages/profile/profile.php"> Profile </a>
			<a href="/html_pages/register/register.php"> Register </a>
		</div>			 	
		
		<h1 class="login-title text-center" >Login</h1>
		
		<div class="row ">
			<div class="col-md-2" id="sidebar-box">
				<div id="sidebar-content" >
					<button class="btn btn-warning"> <a href="/index.php">Home</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/info/info.php">Info</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/test/test.php">Test</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/career_quizz/career_quizz.php">Career Quizz</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/contact/contact.php">Contact</a></button>
				</div> 
			</div>
			
			<div class="col-md-10">
				<!--div class="frame">
					<h2>Login</h2>
					
				</div-->
				<div class="login-box">
					<form method="post" action="login.php" enctype="multipart/form-data">
						<p>Username:</p>
						<input class="input-class" type="text" placeholder="Username"/><br>
						<p>Password:</p>
						<input class="input-class" type="text" placeholder="Password"/><br>
						<button action="login.php" type="submit" name="submit_button">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
	
	
</html>