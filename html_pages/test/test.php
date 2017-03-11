<!DOCTYPE HTML>
<?php 
include("includes/db.php");
include("functions/functions_test.php");
?>


<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="styles/style_test.css" media = "all"> </link>
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
					<button class="btn btn-warning"> <a href="/html_pages/career_quizz/career_quizz.php">Career Quizz</a></button> <br>
					<button class="btn btn-warning"> <a href="/html_pages/contact/contact.php">Contact</a></button>
				</div> 
			</div>
			
			<div class="col-md-10">
					<div class="frame">
						<h2 class="text-center">Test</h2>
						
						<form method="post" action="test.php" enctype="multipart/form-data">
						<ol>
							<li><div class="question">
								<p> <?php getQuestionText(1,21) ?></p>
								<label><input type="radio" name="question_1" value="answ0"><?php getQueOption(1,21,1) ?></label><br>
								<label><input type="radio" name="question_1" value="answ1"><?php getQueOption(1,21,2) ?></label><br>
								<label><input type="radio" name="question_1" value="answ2"><?php getQueOption(1,21,3) ?></label><br>
								<label><input type="radio" name="question_1" value="answ3"><?php getQueOption(1,21,0) ?></label><br>
							</div></li>
							
							<li><div class="question">
								<p><?php getQuestionText(1,22)?></p>
								<label><input type="radio" name="question_2" value="answ0"><?php getQueOption(1,22,1)?> </label><br>
								<label><input type="radio" name="question_2" value="answ1"><?php getQueOption(1,22,2)?> </label><br>
								<label><input type="radio" name="question_2" value="answ2"><?php getQueOption(1,22,3)?> </label><br>
								<label><input type="radio" name="question_2" value="answ3"><?php getQueOption(1,22,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,23)?></p>
								<label><input type="radio" name="question_3" value="answ0"><?php getQueOption(1,23,1)?> </label><br>
								<label><input type="radio" name="question_3" value="answ1"><?php getQueOption(1,23,2)?> </label><br>
								<label><input type="radio" name="question_3" value="answ2"><?php getQueOption(1,23,3)?> </label><br>
								<label><input type="radio" name="question_3" value="answ3"><?php getQueOption(1,23,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,24)?></p>
								<label><input type="radio" name="question_4" value="answ0"><?php getQueOption(1,24,1)?> </label><br>
								<label><input type="radio" name="question_4" value="answ1"><?php getQueOption(1,24,2)?> </label><br>
								<label><input type="radio" name="question_4" value="answ2"><?php getQueOption(1,24,3)?> </label><br>
								<label><input type="radio" name="question_4" value="answ3"><?php getQueOption(1,24,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,25)?></p>
								<label><input type="radio" name="question_5" value="answ0"><?php getQueOption(1,25,1)?> </label><br>
								<label><input type="radio" name="question_5" value="answ1"><?php getQueOption(1,25,2)?> </label><br>
								<label><input type="radio" name="question_5" value="answ2"><?php getQueOption(1,25,3)?> </label><br>
								<label><input type="radio" name="question_5" value="answ3"><?php getQueOption(1,25,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,26)?></p>
								<label><input type="radio" name="question_6" value="answ0"><?php getQueOption(1,26,1)?> </label><br>
								<label><input type="radio" name="question_6" value="answ1"><?php getQueOption(1,26,2)?> </label><br>
								<label><input type="radio" name="question_6" value="answ2"><?php getQueOption(1,26,3)?> </label><br>
								<label><input type="radio" name="question_6" value="answ3"><?php getQueOption(1,26,0)?> </label><br>
							</div></li>							

							<li><div class="question">
								<p><?php getQuestionText(1,27)?></p>
								<label><input type="radio" name="question_7" value="answ0"><?php getQueOption(1,27,1)?> </label><br>
								<label><input type="radio" name="question_7" value="answ1"><?php getQueOption(1,27,2)?> </label><br>
								<label><input type="radio" name="question_7" value="answ2"><?php getQueOption(1,27,3)?> </label><br>
								<label><input type="radio" name="question_7" value="answ3"><?php getQueOption(1,27,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,28)?></p>
								<label><input type="radio" name="question_8" value="answ0"><?php getQueOption(1,28,1)?> </label><br>
								<label><input type="radio" name="question_8" value="answ1"><?php getQueOption(1,28,2)?> </label><br>
								<label><input type="radio" name="question_8" value="answ2"><?php getQueOption(1,28,3)?> </label><br>
								<label><input type="radio" name="question_8" value="answ3"><?php getQueOption(1,28,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,29)?></p>
								<label><input type="radio" name="question_9" value="answ0"><?php getQueOption(1,29,1)?> </label><br>
								<label><input type="radio" name="question_9" value="answ1"><?php getQueOption(1,29,2)?> </label><br>
								<label><input type="radio" name="question_9" value="answ2"><?php getQueOption(1,29,3)?> </label><br>
								<label><input type="radio" name="question_9" value="answ3"><?php getQueOption(1,29,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,30)?></p>
								<label><input type="radio" name="question_10" value="answ0"><?php getQueOption(1,30,1)?> </label><br>
								<label><input type="radio" name="question_10" value="answ1"><?php getQueOption(1,30,2)?> </label><br>
								<label><input type="radio" name="question_10" value="answ2"><?php getQueOption(1,30,3)?> </label><br>
								<label><input type="radio" name="question_10" value="answ3"><?php getQueOption(1,30,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,31)?></p>
								<label><input type="radio" name="question_11" value="answ0"><?php getQueOption(1,31,1)?> </label><br>
								<label><input type="radio" name="question_11" value="answ1"><?php getQueOption(1,31,2)?> </label><br>
								<label><input type="radio" name="question_11" value="answ2"><?php getQueOption(1,31,3)?> </label><br>
								<label><input type="radio" name="question_11" value="answ3"><?php getQueOption(1,31,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,32)?></p>
								<label><input type="radio" name="question_12" value="answ0"><?php getQueOption(1,32,1)?> </label><br>
								<label><input type="radio" name="question_12" value="answ1"><?php getQueOption(1,32,2)?> </label><br>
								<label><input type="radio" name="question_12" value="answ2"><?php getQueOption(1,32,3)?> </label><br>
								<label><input type="radio" name="question_12" value="answ3"><?php getQueOption(1,32,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,33)?></p>
								<label><input type="radio" name="question_13" value="answ0"><?php getQueOption(1,33,1)?> </label><br>
								<label><input type="radio" name="question_13" value="answ1"><?php getQueOption(1,33,2)?> </label><br>
								<label><input type="radio" name="question_13" value="answ2"><?php getQueOption(1,33,3)?> </label><br>
								<label><input type="radio" name="question_13" value="answ3"><?php getQueOption(1,33,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,34)?></p>
								<label><input type="radio" name="question_14" value="answ0"><?php getQueOption(1,34,1)?> </label><br>
								<label><input type="radio" name="question_14" value="answ1"><?php getQueOption(1,34,2)?> </label><br>
								<label><input type="radio" name="question_14" value="answ2"><?php getQueOption(1,34,3)?> </label><br>
								<label><input type="radio" name="question_14" value="answ3"><?php getQueOption(1,34,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,35)?></p>
								<label><input type="radio" name="question_15" value="answ0"><?php getQueOption(1,35,1)?> </label><br>
								<label><input type="radio" name="question_15" value="answ1"><?php getQueOption(1,35,2)?> </label><br>
								<label><input type="radio" name="question_15" value="answ2"><?php getQueOption(1,35,3)?> </label><br>
								<label><input type="radio" name="question_15" value="answ3"><?php getQueOption(1,35,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,36)?></p>
								<label><input type="radio" name="question_16" value="answ0"><?php getQueOption(1,36,1)?> </label><br>
								<label><input type="radio" name="question_16" value="answ1"><?php getQueOption(1,36,2)?> </label><br>
								<label><input type="radio" name="question_16" value="answ2"><?php getQueOption(1,36,3)?> </label><br>
								<label><input type="radio" name="question_16" value="answ3"><?php getQueOption(1,36,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,37)?></p>
								<label><input type="radio" name="question_17" value="answ0"><?php getQueOption(1,37,1)?> </label><br>
								<label><input type="radio" name="question_17" value="answ1"><?php getQueOption(1,37,2)?> </label><br>
								<label><input type="radio" name="question_17" value="answ2"><?php getQueOption(1,37,3)?> </label><br>
								<label><input type="radio" name="question_17" value="answ3"><?php getQueOption(1,37,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,38)?></p>
								<label><input type="radio" name="question_18" value="answ0"><?php getQueOption(1,38,1)?> </label><br>
								<label><input type="radio" name="question_18" value="answ1"><?php getQueOption(1,38,2)?> </label><br>
								<label><input type="radio" name="question_18" value="answ2"><?php getQueOption(1,38,3)?> </label><br>
								<label><input type="radio" name="question_18" value="answ3"><?php getQueOption(1,38,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,39)?></p>
								<label><input type="radio" name="question_19" value="answ0"><?php getQueOption(1,39,1)?> </label><br>
								<label><input type="radio" name="question_19" value="answ1"><?php getQueOption(1,39,2)?> </label><br>
								<label><input type="radio" name="question_19" value="answ2"><?php getQueOption(1,39,3)?> </label><br>
								<label><input type="radio" name="question_19" value="answ3"><?php getQueOption(1,39,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(1,40)?></p>
								<label><input type="radio" name="question_20" value="answ0"><?php getQueOption(1,40,1)?> </label><br>
								<label><input type="radio" name="question_20" value="answ1"><?php getQueOption(1,40,2)?> </label><br>
								<label><input type="radio" name="question_20" value="answ2"><?php getQueOption(1,40,3)?> </label><br>
								<label><input type="radio" name="question_20" value="answ3"><?php getQueOption(1,40,0)?> </label><br>
							</div></li>
							
							<li><div class="question">
								<p><?php getQuestionText(1,41)?></p>
								<label><input type="radio" name="question_21" value="answ0"><?php getQueOption(1,41,1)?> </label><br>
								<label><input type="radio" name="question_21" value="answ1"><?php getQueOption(1,41,2)?> </label><br>
								<label><input type="radio" name="question_21" value="answ2"><?php getQueOption(1,41,3)?> </label><br>
								<label><input type="radio" name="question_21" value="answ3"><?php getQueOption(1,41,0)?> </label><br>
							</div></li>
							
						</ol>
						<button class="button-class" type="submit" name="submit_answers">Finalizare</button>
						</form>
						
					</div>
			</div>
		</div>
	</div>
	
	</body>

</html>


<?php

	$test_score=0;
	
	if(isset($_POST['submit_answers'])){
		$question_answer[1] = $_POST['question_1'];
		$question_answer[2] = $_POST['question_2'];
		$question_answer[3] = $_POST['question_3'];
		$question_answer[4] = $_POST['question_4'];
		$question_answer[5] = $_POST['question_5'];
		$question_answer[6] = $_POST['question_6'];
		$question_answer[7] = $_POST['question_7'];
		$question_answer[8] = $_POST['question_8'];
		$question_answer[9] = $_POST['question_9'];
		$question_answer[10] = $_POST['question_10'];
		$question_answer[11] = $_POST['question_11'];
		$question_answer[12] = $_POST['question_12'];
		$question_answer[13] = $_POST['question_13'];
		$question_answer[14] = $_POST['question_14'];
		$question_answer[15] = $_POST['question_15'];
		$question_answer[16] = $_POST['question_16'];
		$question_answer[17] = $_POST['question_17'];
		$question_answer[18] = $_POST['question_18'];
		$question_answer[19] = $_POST['question_19'];
		$question_answer[20] = $_POST['question_20'];
		$question_answer[21] = $_POST['question_21'];

		for($i=1; $i<22; $i++){
			if($question_answer[$i] == "answ0"){
				$test_score += 0;
			}
			else{
				if($question_answer[$i] == "answ1"){
					$test_score += 1;
				}
				else{
					if($question_answer[$i] == "answ2"){
						$test_score += 2;
					}
					else{
						if($question_answer[$i] == "answ3"){
							$test_score += 3;
						}
					}
				}
			}
		}
		
		if($test_score < 11)
			echo "<script>alert('Test score: $test_score  -  Aceste urcasuri si coborasuri sunt considerate normale.') </script>";
		if($test_score > 10 && $test_score < 17)
			echo "<script>alert('Test score: $test_score  -  Usoare tulburari de dispozitie.') </script>";
		if($test_score > 16 && $test_score < 21)
			echo "<script>alert('Test score: $test_score  -  La limita unei depresii.') </script>";
		if($test_score > 20 && $test_score > 31)
			echo "<script>alert('Test score: $test_score  -  Depresie moderata.') </script>";
		if($test_score > 30 && $test_score > 41)
			echo "<script>alert('Test score: $test_score  -  Depresie severa.') </script>";
		if($test_score > 40)
			echo "<script>alert('Test score: $test_score  -  Depresie extrema.') </script>";
		
		echo "<script>window.open('test.php','_self')</script>";
		exit();
	}
?>









