<?php

$db = mysqli_connect("localhost","root","","career_website");
if(mysqli_connect_errno()){
	echo "The connection was not established: ".mysqli_connect_error();
}

function getQuestionText($test_number, $question_number){
	global $db;
	
	$get_question = "select * from Question where test_id = $test_number and que_id= $question_number";
	$run_question =  mysqli_query($db, $get_question);
	
	while($row_question = mysqli_fetch_array($run_question)){
		$que_text = $row_question['que_text'];
		
		echo "$que_text";
	}
	
}
function getQueOption($test_number, $question_number, $question_option){
	global $db;
	
	$get_option = "select * 
	from question_option
	join (
		select * from Question where test_id = $test_number and que_id = $question_number
		) as A
	using (que_id)
	where que_opt_id%4 = $question_option";
	
	$run_option = mysqli_query($db, $get_option);
	
	while($row_option = mysqli_fetch_array($run_option)){
		$que_opt_text = $row_option['que_opt_text'];
		
		echo "$que_opt_text";
	}	
}

?>