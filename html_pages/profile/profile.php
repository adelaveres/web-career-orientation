<!DOCTYPE HTML>
<?php 
include("includes/db.php");
include("functions/functions_profile.php");
?>


<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="style_profile.css" media = "all"> </link>
		<title>Online Tests</title>
		
	</head>
	
<body>
	<div class="container-fluid body-content">
		<div id="login-profile"> <a href="/html_pages/login/login.php"> Login </a> 
								<a href="/html_pages/register/register.php"> Register </a>
		</div>			 	
		
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
					<div class="frame">
						<h2 class="text-center">Profile</h2>
						<br>
						
						<form method="post" action="profile.php" enctype="multipart/form-data">
						<p>Enter username: </p>
						<input type="text" placeholder="username" name="username_text"/>
						<button type="submit" name="submit_button">Search</button>
						<br>
						<br>
						</format>
						<?php
							if(isset($_POST['submit_button'])){
								$username = $_POST['username_text'];
								
								getProfileDetails($username);
							}
						?>						
						
					</div>
			</div>
		</div>
	</div>
</body>
	
</html>
