<?php
    include 'connection.php';			// establishes the connection with db

    $username = $_POST['username'];		// retrieves the value
    $email = $_POST['email'];			// retrieves the value
    $password = $_POST['password'];		// retrieves the value
    $membertype = $_POST['membertype'];	// retrieves the value

    $add_query = "INSERT into users(userID, username, email, password) VALUES('$membertype', '$username', '$email', '$password')";
    $run = mysqli_query($con, $add_query);		// query to insert into table

    if($run)
	{
        echo "<script>alert('User Added Successfully')</script>";		// displays a JavaScript alert indicating successful user addition
        echo "<script>window.location.href='user.php'</script>";		// redirects the user to the 'user.php' page using JavaScript
    }
    else
	{
        echo "<script>alert('User Not Added')</script>";				// displays a JavaScript alert indicating that the user was not added
        echo "<script>window.location.href='user.php'</script>";		// redirects the user to the 'user.php' page using JavaScript
    }
?>