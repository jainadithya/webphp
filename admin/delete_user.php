<?php
    include 'connection.php';			// establishes db connection

    /* Delete PHP Function */
    if(isset($_GET["id"])){
        $id = $_GET["id"];

        $delete_query = "DELETE FROM users WHERE id = '$id'";		// query to delete a user based on the provided "id"
        $sql_run = mysqli_query($con, $delete_query);

        if($sql_run){
            echo "<script>alert('User Successfully Deleted')</script>";		// displays a success message using JavaScript alert
            echo "<script>window.location.href='user.php'</script>";		// redirects the user to 'user.php' using JavaScript
        }
        else{
            echo "<script>alert('User Not Deleted')</script>";				// displays an error message using JavaScript alert
            echo "<script>window.location.href='user.php'</script>";		// redirects the user to 'user.php' using JavaScript
        }
    }
    /* End of Delete PHP Function */
?>