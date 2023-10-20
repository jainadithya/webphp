<?php
	include 'includes/connection.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
	$result = mysqli_query($con, $query);
	// $count = mysqli_num_rows($result);
	if(mysqli_num_rows($result) > 0){
		$_SESSION['id'] = $_POST['username'];
		 while($row = $result->fetch_assoc()){
			echo "Not Assigned";
			$user_id = $row['id'];
            $user_name = $row['username'];
			//SET TIMEZONE
			date_default_timezone_set('Asia/Calcutta'); 
			$date_time = date('y-m-d h:i:S');
			$status = "Login Successful";
			$query = "INSERT INTO `user_logs`(`user_id`, `user_name`, `login_date_time`, `login_status`) VALUES('$user_id', '$user_name', '$date_time', '$status')";
			$query_run = mysqli_query($con, $query);
		}
		header("location: index_member.php");
	}
	else{
		die ("Failed to Connect!" .mysqli_error($con));
		
	}
?>