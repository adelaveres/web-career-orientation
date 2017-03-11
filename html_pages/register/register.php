<!DOCTYPE HTML>
<?php 
include("includes/db.php");
//include("functions/functions.php");
?>


<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="	style_register.css" media = "all"> </link>
		<title>Online Tests</title>
		
	</head>
	
<body>
	<div class="container-fluid body-content">
		<div id="login-profile"> <a href="/html_pages/login/login.php"> Login </a> 
								<a href="/html_pages/profile/profile.php"> Profile </a>
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
				<h2 class="text-center">Register</h2>
						
				<div class="register-box">	
					<form method="post" action="register.php" enctype="multipart/form-data">
					<p>Name:</p>
					<input class="input-class" type="text" name="user_name" placeholder="Name"><br>
					<p>*Email:</p>
					<input class="input-class" type="text" name="user_email" placeholder="Email"><br>
					<p>*Username:</p>
					<input class="input-class" type="text" name="user_username" placeholder="Username"><br>
					<p>*Parola:</p>
					<input class="input-class" type="text" name="user_password" placeholder="Parola"><br>				
					<button type="submit" name="user_register" >Register</button>
					
					<div class="row end-notice">	
						<p>-Câmpurile marcate cu '*' sunt obligatorii.</p>
					</div>
					</form>
				</div>
				
				
					

			</div>
		</div>
	</div>
</body>
	
</html>


<?php 

if(isset($_POST['user_register'])){
	
	//get user attrib from online form
	$user_name = $_POST['user_name'];
	$user_email = $_POST['user_email'];
	$user_username = $_POST['user_username'];
	$user_password = $_POST['user_password'];
	
	if($user_name=='' OR $user_email=='' OR $user_username=='' OR $user_password==''){
		echo "<script>alert('Please fill all the fields!')</script>";
		exit();
	}
	else{
		$insert_query= "insert into users (admin_id,user_name, user_email, user_username, user_password)
		values (1,'$user_name', '$user_email', '$user_username', '$user_password')";
		
		$run_query= mysqli_query($con, $insert_query);
		
		//if this query runs
		if($run_query){
			echo "<script>alert('User registration successfull')</script>";
			echo "<script>window.open('register.php','_self')</script>";
		}
	}
	
}
?>









