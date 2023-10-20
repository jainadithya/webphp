<?php
    include 'connection.php';			// established the db connection

    $id = $_POST['user_id'];			// retrieves the value
    $username = $_POST['username'];		// retrieves the value
    $email = $_POST['email'];			// retrieves the value
    $password = $_POST['password'];		// retrieves the value
    $membertype = $_POST['membertype'];	// retrieves the value

    $update_query = "UPDATE users SET `userID`='$membertype',`username`='$username',`email`='$email',`password`='$password' WHERE `id`='$id'";
    $run = mysqli_query($con, $update_query);			// query to update the table info

    if($run){
        echo "<script>alert('User Successfully Updated')</script>";			// displays a success message using JavaScript alert
        echo "<script>window.location.href='user.php'</script>";			// redirects the user to 'user.php' using JavaScript
        
    }
    else{
        echo "<script>alert('User Not Updated')</script>";					// displays an error message using JavaScript alert
        echo "<script>window.location.href='user.php'</script>";			// redirects the user to 'user.php' using JavaScript
    }
?>