<?php
    include 'connection.php';				// establishes connection with db

    $id = $_POST['user_id'];					// retrieves the value
    $playername = $_POST['playername'];			// retrieves the value
    $playerrole = $_POST['playerrole'];			// retrieves the value
    $playerdetails = $_POST['playerdetails'];	// retrieves the value

    $update_query = "UPDATE player_info SET `name`='$playername',`role`='$playerrole',`details`='$playerdetails' WHERE `id`='$id'";
    $run = mysqli_query($con, $update_query);				// query to update table info

    if($run){
        echo "<script>alert('Player Successfully Updated')</script>";		// displays a success message using JavaScript alert
        echo "<script>window.location.href='players.php'</script>";			// redirects the user to 'players.php' using JavaScript
        
    }
    else{
        echo "<script>alert('Player Not Updated')</script>";				// displays an error message using JavaScript alert
        echo "<script>window.location.href='players.php'</script>";			// redirects the user to 'players.php' using JavaScript
    }
?>