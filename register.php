<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>Register</title>
</head>
	<style>
  form{margin: auto;}
</style>

<body>
    <form action="register.php" method="post" name="form1">
	<h1>Register</h1>
	<div>
		<label for="username">Username:</label>
		<input type="text" name="name" required />
	</div>
	<div>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" />
	</div>
	<div>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" />
	</div>
	<div>
		<label for="confirm_password">Confirm Password:</label>
		<input type="password" name="confirm_password" id="confirm_password" />
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" value="silver" />
		<a href="./membershiptype.php">
			<label class="form-check-label" for="flexRadioDefault1">
				Silver Member Free
			</label>
		</a>
	</div>

	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" value="gold" checked />
		<a href="./membershiptype.php">
			<label class="form-check-label" for="flexRadioDefault2">
				Gold Member 10€
			</label>
		</a>
	</div>

	<div class="form-check">
		<input class="form-check-input" type="radio" name="flexRadioDefault" value="platinum" />
		<a href="./membershiptype.php">
			<label class="form-check-label" for="flexRadioDefault2">
				Platinum Member 20€
			</label>
		</a>
	</div>
	<div>
		<label for="agree">
			<input type="checkbox" name="agree" id="agree" value="yes" /> I agree with the
			<a href="#" title="term of services">term of services</a>
		</label>
	</div>
	<button type="submit" name="register" value="Register">Register</button>
	<footer>Already a member? <a href="log.php">Login here</a></footer>

        <?php
        //including the database connection file
	
		$servername = "localhost";
		$username = "phpmyadmin";
		$password = "root";
		$dbname = "WeBees";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}


        // Check If form submitted, insert user data into database.
        if (isset($_POST['register'])) {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
			$membership = $_POST['flexRadioDefault'];

            // If email already exists, throw error
            $email_result = mysqli_query($conn, "select 'email' from users where email='$email' and password='$password'");

            // Count the number of row matched 
            $user_matched = mysqli_num_rows($email_result);

            // If number of user rows returned more than 0, it means email already exists
            if ($user_matched > 0) {
                echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$email'.";
            } else {
                // Insert user data into database
                $result   = mysqli_query($conn, "INSERT INTO users(userID,username,email,password) VALUES('$membership','$name','$email','$password')");

                // check if user data inserted successfully.
                if ($result) {
                    echo "<br/><br/>User Registered successfully.";
                } else {
                    echo "Registration error. Please try again." . mysqli_error($conn);
                }
            }
        }
	$conn->close();
        ?>
    </form>
</body>

</html>