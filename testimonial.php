<?php
	include "includes/connection.php";
	if(!isset($_SESSION["id"])){
		include 'includes/header.php';
	}
	else{
		include 'includes/header_member.php';
	}
?>	<!-- header -->

<main>
	<section>
		<h2 class="rcb-header">		<!-- header of the feedback page -->
			Give Us Your Valuable Feedback.
		</h2>
    <section class="formthree ptb-100">
        <section class="container">			<!-- main container for feedback got help from w3school bootstrap -->
            <section class="row">
                <section class="col-md-8 col-md-offset-2" style="margin-left:26%">
                    <form method= "POST">					<!-- form starts -->
                        <section class="row">		<!-- name and email on the same row -->
                            <section class="col-md-6">
                                <section class="form-group">
                                    <label class="sr-only" for="username">Name</label>
                                    <input type="text" class="form-control" name="name" required="" id="nameSix" placeholder="Your Name">
                                </section>
                            </section>
                            <section class="col-md-6">
                                <section class="form-group">
                                    <label class="sr-only" for="email">Email</label>
                                    <input type="email" class="form-control" name="email" required="" id="emailSix" placeholder="Email Address">
                                </section>
                            </section>
                        </section>
                        <!--end of /.row-->
                        <section class="form-group">		<!-- text area space -->
                            <label class="sr-only" for="feedback">Message</label>
                            <textarea class="form-control" required="" rows="7" name="message" placeholder="Write Message"></textarea>
                        </section>
                        <button type="submit" name="" class="btn btn-primary">Send Message</button>		<!-- button on the feedback form -->
                    </form>		<!-- form ends -->
                </section>
            </section>
        </section>
        <!-- container ends -->
    </section>
		</section>
</main>

<?php
$servername = "localhost"; // change to your database server name
$username = "phpmyadmin"; // change to your database username
$password = "root"; // change to your database password
$dbname = "WeBees"; // change to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
// Check if the form was submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data
    $Name = $_POST["name"];
    $Email = $_POST["email"];
	$Message = $_POST["message"];
    // Insert the data into the database
    $sql = "INSERT INTO testimonial (username, email, feedback) VALUES ('$Name', '$Email','$Message')";

    if (mysqli_query($conn, $sql)) {
        echo "Data submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
<?php
	include ("./includes/footer.php");
?>		<!-- footer -->