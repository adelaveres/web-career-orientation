<!DOCTYPE HTML>


<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="styles/style_contact.css" media = "all"> </link>
		<title>Online Tests</title>
		
	</head>
	
	<body>
	<div class="container-fluid body-content">
		<div id="login-profile"> <a href="/html_pages/login/login.php"> Login </a> 
									<a href="/html_pages/profile/profile.php"> Profile </a>
									<a href="/html_pages/register/register.php"> Register </a>
		</div>	
		
		<div class="row ">
			<div class="col-md-2" id="sidebar-box">
				<div id="sidebar-content" >
					<button class="btn btn-warning"> <a href="/index.php">Home</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/info/info.php">Info</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/test/test.php">Test</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/career_quizz/career_quizz.php">Career Quizz</a></button> <br>
				</div> 
			</div>
			
			<div class="col-md-10">
					<div class="frame">
						<h2>Contact</h2>
						<p>
						CAREERFIT SRL<br>
						Str. Valea Lungă 5 BUCURESTI, Loc. SECTORUL 6<br>
						<br>
						Email:<br>
						<a href=# >careerfit@yahoo.com</a>
						</p>
						
						<h3>Mesaj:</h3>
						<form method="post" action="contact.php" enctype="multipart/form-data">
							<textarea name="user_message" cols="35" rows="9"></textarea>
							<button action="contact.php" type="submit" name="send_button">Send</button>
						</form>
						
					</div>
			</div>
		</div>
		
	</div>
	
	</body>
	
	
</html>