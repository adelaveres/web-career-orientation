<!DOCTYPE HTML>
<?php 
include("includes/db.php");
include("functions/functions.php");
?>


<html>
	<head>
		
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Pacifico" rel="stylesheet">
		<link rel="stylesheet" href="/style.css" media = "all"> </link>
		<title>CareerFIT</title>
		
	</head>
	
	<body>
	<!-- Main container starts -->
	<div class="container-fluid body-content">
		<div id="login-profile"> <a href="html_pages/login/login.php"> Login </a> 
								<a href="html_pages/profile/profile.php"> Profile </a>
								<a href="html_pages/register/register.php"> Register </a>
		</div>			 	
		
		<div class="body-box">
			<h1 class="text-center title">CareerFIT</h1>
			<p class="motto text-center"><em>"...pentru ca atunci cand vei fi mare, visul să fie real"</em><p>
			<hr>
			
			
			<!-- Menu_bar -->
			<div class="text-center">
				<button id="btn-home" class="btn btn-warning"><a href="index.php"> Home</a> </button>
				<button id="btn-info" class="btn btn-warning"><a href="html_pages/info/info.php"> Info </a> </button>
				<button id="btn-test" class="btn btn-warning"><a href="html_pages/test/test.php"> Test </a> </button>
				<button id="btn-career_quizz" class="btn btn-warning"><a href="html_pages/career_quizz/career_quizz.php"> Career Quizz </a> </button>
				<button id="btn-contact" class="btn btn-warning"><a href="html_pages/contact/contact.php"> Contact </a> </button>
			</div>
			
			<div class="home-bodytext text-center">
				<p>
				Ti-ai dorit dintotdeauna sa faci ceva care sa te implineasca si nu stii ce?
				<br>
				Poate te-ai gandit la una sau mai multe variante, insa nu stii cat de bine ti se potrivesc?
				</br>
				Ei bine, atunci esti in locul potrivit.
				<br>
				Indiferent ca esti in cautarea unei cariere stralucite,
				sau pur si simplu implinire personala la locul de munca,
				fie ca doresti sa te reorientezi, noi suntem mana de ajutor de care ai nevoie.
				<br>
				Site-ul va pune la dispozitie o suita de teste pentru a va testa inteligenta
				si inclinatiile spre anumite domenii.
				De asemenea, va vine in ajutor pentru a va testa cunostintele minime in domeniul ales,
				sau nou descoperit, care vi se potriveste.
				<br>
				Mult succes si o cariera implinita!
				</p>
			</div>
		
		</div>
		
	</div>
	</body>
	
	
</html>