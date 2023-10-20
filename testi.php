
<?php
    	include 'includes/connection.php';

        // Check If form submitted, insert user data into database.
        if (!isset($_POST['testimonial'])) {
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $feedback = $_POST['feedback'];
			
			
			$result   = mysqli_query($con, "INSERT INTO testimonial(username,email,feedback) VALUES('$username','$email','$feedback')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>Testimonial given successfully.";
                } else {
                    echo "Error. Please try again." . mysqli_error($con);
                }
		}
	$con->close();
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>