<!DOCTYPE HTML>
<?php 
include("includes/db.php");
include("functions/functions_career.php");
?>


<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="styles/style_career_quizz.css" media = "all"> </link>
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
					<button class="btn btn-warning"> <a href="/html_pages/contact/contact.php">Contact</a></button>
				</div> 
			</div>
			
			<div class="col-md-10">
					<div class="frame">
						<h2 class="text-center">Career Quizz</h2>
						
						<form method="post" action="career_quizz.php" enctype="multipart/form-data">
						<ol>
							<li><div class="question">
								<p> <?php getQuestionText(2,1) ?></p>
								<label><input type="radio" name="question_1" value="answ0"><?php getQueOption(2,1,1) ?></label><br>
								<label><input type="radio" name="question_1" value="answ1"><?php getQueOption(2,1,2) ?></label><br>
								<label><input type="radio" name="question_1" value="answ2"><?php getQueOption(2,1,3) ?></label><br>
								<label><input type="radio" name="question_1" value="answ3"><?php getQueOption(2,1,0) ?></label><br>
							</div></li>
							
							<li><div class="question">
								<p><?php getQuestionText(2,2)?></p>
								<label><input type="radio" name="question_2" value="answ0"><?php getQueOption(2,2,1)?> </label><br>
								<label><input type="radio" name="question_2" value="answ1"><?php getQueOption(2,2,2)?> </label><br>
								<label><input type="radio" name="question_2" value="answ2"><?php getQueOption(2,2,3)?> </label><br>
								<label><input type="radio" name="question_2" value="answ3"><?php getQueOption(2,2,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,3)?></p>
								<label><input type="radio" name="question_3" value="answ0"><?php getQueOption(2,3,1)?> </label><br>
								<label><input type="radio" name="question_3" value="answ1"><?php getQueOption(2,3,2)?> </label><br>
								<label><input type="radio" name="question_3" value="answ2"><?php getQueOption(2,3,3)?> </label><br>
								<label><input type="radio" name="question_3" value="answ3"><?php getQueOption(2,3,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,4)?></p>
								<label><input type="radio" name="question_4" value="answ0"><?php getQueOption(2,4,1)?> </label><br>
								<label><input type="radio" name="question_4" value="answ1"><?php getQueOption(2,4,2)?> </label><br>
								<label><input type="radio" name="question_4" value="answ2"><?php getQueOption(2,4,3)?> </label><br>
								<label><input type="radio" name="question_4" value="answ3"><?php getQueOption(2,4,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,5)?></p>
								<label><input type="radio" name="question_5" value="answ0"><?php getQueOption(2,5,1)?> </label><br>
								<label><input type="radio" name="question_5" value="answ1"><?php getQueOption(2,5,2)?> </label><br>
								<label><input type="radio" name="question_5" value="answ2"><?php getQueOption(2,5,3)?> </label><br>
								<label><input type="radio" name="question_5" value="answ3"><?php getQueOption(2,5,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,6)?></p>
								<label><input type="radio" name="question_6" value="answ0"><?php getQueOption(2,6,1)?> </label><br>
								<label><input type="radio" name="question_6" value="answ1"><?php getQueOption(2,6,2)?> </label><br>
								<label><input type="radio" name="question_6" value="answ2"><?php getQueOption(2,6,3)?> </label><br>
								<label><input type="radio" name="question_6" value="answ3"><?php getQueOption(2,6,0)?> </label><br>
							</div></li>							

							<li><div class="question">
								<p><?php getQuestionText(2,7)?></p>
								<label><input type="radio" name="question_7" value="answ0"><?php getQueOption(2,7,1)?> </label><br>
								<label><input type="radio" name="question_7" value="answ1"><?php getQueOption(2,7,2)?> </label><br>
								<label><input type="radio" name="question_7" value="answ2"><?php getQueOption(2,7,3)?> </label><br>
								<label><input type="radio" name="question_7" value="answ3"><?php getQueOption(2,7,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,8)?></p>
								<label><input type="radio" name="question_8" value="answ0"><?php getQueOption(2,8,1)?> </label><br>
								<label><input type="radio" name="question_8" value="answ1"><?php getQueOption(2,8,2)?> </label><br>
								<label><input type="radio" name="question_8" value="answ2"><?php getQueOption(2,8,3)?> </label><br>
								<label><input type="radio" name="question_8" value="answ3"><?php getQueOption(2,8,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,9)?></p>
								<label><input type="radio" name="question_9" value="answ0"><?php getQueOption(2,9,1)?> </label><br>
								<label><input type="radio" name="question_9" value="answ1"><?php getQueOption(2,9,2)?> </label><br>
								<label><input type="radio" name="question_9" value="answ2"><?php getQueOption(2,9,3)?> </label><br>
								<label><input type="radio" name="question_9" value="answ3"><?php getQueOption(2,9,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,10)?></p>
								<label><input type="radio" name="question_10" value="answ0"><?php getQueOption(2,10,1)?> </label><br>
								<label><input type="radio" name="question_10" value="answ1"><?php getQueOption(2,10,2)?> </label><br>
								<label><input type="radio" name="question_10" value="answ2"><?php getQueOption(2,10,3)?> </label><br>
								<label><input type="radio" name="question_10" value="answ3"><?php getQueOption(2,10,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,11)?></p>
								<label><input type="radio" name="question_11" value="answ0"><?php getQueOption(2,11,1)?> </label><br>
								<label><input type="radio" name="question_11" value="answ1"><?php getQueOption(2,11,2)?> </label><br>
								<label><input type="radio" name="question_11" value="answ2"><?php getQueOption(2,11,3)?> </label><br>
								<label><input type="radio" name="question_11" value="answ3"><?php getQueOption(2,11,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,12)?></p>
								<label><input type="radio" name="question_12" value="answ0"><?php getQueOption(2,12,1)?> </label><br>
								<label><input type="radio" name="question_12" value="answ1"><?php getQueOption(2,12,2)?> </label><br>
								<label><input type="radio" name="question_12" value="answ2"><?php getQueOption(2,12,3)?> </label><br>
								<label><input type="radio" name="question_12" value="answ3"><?php getQueOption(2,12,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,13)?></p>
								<label><input type="radio" name="question_13" value="answ0"><?php getQueOption(2,13,1)?> </label><br>
								<label><input type="radio" name="question_13" value="answ1"><?php getQueOption(2,13,2)?> </label><br>
								<label><input type="radio" name="question_13" value="answ2"><?php getQueOption(2,13,3)?> </label><br>
								<label><input type="radio" name="question_13" value="answ3"><?php getQueOption(2,13,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,14)?></p>
								<label><input type="radio" name="question_14" value="answ0"><?php getQueOption(2,14,1)?> </label><br>
								<label><input type="radio" name="question_14" value="answ1"><?php getQueOption(2,14,2)?> </label><br>
								<label><input type="radio" name="question_14" value="answ2"><?php getQueOption(2,14,3)?> </label><br>
								<label><input type="radio" name="question_14" value="answ3"><?php getQueOption(2,14,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,15)?></p>
								<label><input type="radio" name="question_15" value="answ0"><?php getQueOption(2,15,1)?> </label><br>
								<label><input type="radio" name="question_15" value="answ1"><?php getQueOption(2,15,2)?> </label><br>
								<label><input type="radio" name="question_15" value="answ2"><?php getQueOption(2,15,3)?> </label><br>
								<label><input type="radio" name="question_15" value="answ3"><?php getQueOption(2,15,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,16)?></p>
								<label><input type="radio" name="question_16" value="answ0"><?php getQueOption(2,16,1)?> </label><br>
								<label><input type="radio" name="question_16" value="answ1"><?php getQueOption(2,16,2)?> </label><br>
								<label><input type="radio" name="question_16" value="answ2"><?php getQueOption(2,16,3)?> </label><br>
								<label><input type="radio" name="question_16" value="answ3"><?php getQueOption(2,16,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,17)?></p>
								<label><input type="radio" name="question_17" value="answ0"><?php getQueOption(2,17,1)?> </label><br>
								<label><input type="radio" name="question_17" value="answ1"><?php getQueOption(2,17,2)?> </label><br>
								<label><input type="radio" name="question_17" value="answ2"><?php getQueOption(2,17,3)?> </label><br>
								<label><input type="radio" name="question_17" value="answ3"><?php getQueOption(2,17,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,18)?></p>
								<label><input type="radio" name="question_18" value="answ0"><?php getQueOption(2,18,1)?> </label><br>
								<label><input type="radio" name="question_18" value="answ1"><?php getQueOption(2,18,2)?> </label><br>
								<label><input type="radio" name="question_18" value="answ2"><?php getQueOption(2,18,3)?> </label><br>
								<label><input type="radio" name="question_18" value="answ3"><?php getQueOption(2,18,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,19)?></p>
								<label><input type="radio" name="question_19" value="answ0"><?php getQueOption(2,19,1)?> </label><br>
								<label><input type="radio" name="question_19" value="answ1"><?php getQueOption(2,19,2)?> </label><br>
								<label><input type="radio" name="question_19" value="answ2"><?php getQueOption(2,19,3)?> </label><br>
								<label><input type="radio" name="question_19" value="answ3"><?php getQueOption(2,19,0)?> </label><br>
							</div></li>

							<li><div class="question">
								<p><?php getQuestionText(2,20)?></p>
								<label><input type="radio" name="question_20" value="answ0"><?php getQueOption(2,20,1)?> </label><br>
								<label><input type="radio" name="question_20" value="answ1"><?php getQueOption(2,20,2)?> </label><br>
								<label><input type="radio" name="question_20" value="answ2"><?php getQueOption(2,20,3)?> </label><br>
								<label><input type="radio" name="question_20" value="answ3"><?php getQueOption(2,20,0)?> </label><br>
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

		for($i=1; $i<21; $i++){
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
		
		$percentage = $test_score*100/60;
		
		if($test_score < 10)
			echo "<script>alert('Test score: $test_score ( $percentage% )  -  Cunostinte foarte slabe.') </script>";
		if($test_score > 9 && $test_score < 20)
			echo "<script>alert('Test score: $test_score ( $percentage% ) -  Cunostinte slabe.') </script>";
		if($test_score > 19 && $test_score < 40)
			echo "<script>alert('Test score: $test_score ( $percentage% ) -  Cunostinte medii.') </script>";
		if($test_score > 39)
			echo "<script>alert('Test score: $test_score ( $percentage% ) -  Cunostinte foarte bune.') </script>";
		
		
		echo "<script>window.open('career_quizz.php','_self')</script>";
		exit();
	}
?>