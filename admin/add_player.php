<?php
    include 'connection.php';
	// Checking if the "add_player" form has been submitted
    if(isset($_POST["add_player"])){
		// Getting the form data using POST method
		$playername = $_POST['playername'];
		$playerrole = $_POST['playerrole'];
		$playerdetails = $_POST['playerdetails'];
		
		// Creating a SQL query to insert player data into the "player_info" table
		$player_query = "INSERT into player_info(name, role, details) 
		VALUES('$playername','$playerrole','$playerdetails')";
		
		 // Executing the query using mysqli_query() function and storing the result in $player_query_run variable
		$player_query_run = mysqli_query($con, $player_query);
				
		// Checking if the query was executed successfully or not
		if($player_query_run){
			// If successful, displaying a success message using alert() function and redirecting to "players.php" page
			echo "<script>alert('Player Added Successfully')</script>";
			echo "<script>window.location.href='players.php'</script>";
		}
		else{
			 // If unsuccessful, displaying an error message using alert() function and redirecting to "players.php" page
			echo "<script>alert('Player Not Added')</script>";
			echo "<script>window.location.href='players.php'</script>";
		}
    }
?>