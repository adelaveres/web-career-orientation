<?php

$db = mysqli_connect("localhost","root","","career_website");
if(mysqli_connect_errno()){
	echo "The connection was not established: ".mysqli_connect_error();
}


function getProfileDetails($username){
	global $db;
	
	$get_profile= "select * from Users where user_username='$username' ";
	$run_profile= mysqli_query($db, $get_profile);
	
	while($row_profile=mysqli_fetch_array($run_profile)){
		$name = $row_profile['user_name'];
		$email = $row_profile['user_email'];
		$username= $row_profile['user_username'];
		$user_id = $row_profile['user_id'];
		$user_password = $row_profile['user_password'];
		
		echo "<ul>
				<li>Name: $name</li>
				<li>Username: $username</li>
				<li>Email: $email</li>
				<li>ID: $user_id</li>
				<li>Password: $user_password</li>
			</ul>";
	}
	
}

?>