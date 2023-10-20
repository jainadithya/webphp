<?php
    include 'connection.php';		// establishes db connection

    /* Delete PHP Function */
    if(isset($_GET["player_id"])){
        $player_id = $_GET["player_id"];		// retrieves the value of 'id'

        $delete_query = "DELETE FROM player_info WHERE id = '$player_id'";		// query to delete a row from the 'users' table based on the specified 'id'
        $sql_run = mysqli_query($con, $delete_query);

        if($sql_run){
            echo "<script>alert('PLayer Successfully Deleted')</script>";		// displays a JavaScript alert indicating successful deletion of the user
            echo "<script>window.location.href='players.php'</script>";			// redirects the user to the 'user.php' page using JavaScript
        }
        else{
            echo "<script>alert('PLayer Not Deleted')</script>";				// displays a JavaScript alert indicating that the user was not deleted
            echo "<script>window.location.href='players.php'</script>";			// redirects the user to the 'user.php' page using JavaScript
        }
    }
    /* End of Delete PHP Function */
?>