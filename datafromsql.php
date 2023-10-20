<?php
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
$sql = "SELECT * FROM testimonial";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // Loop through each row of data
  while($row = $result->fetch_assoc()) {
    // Create an HTML card for the current row of data
    ?>
				<li class="item active c-item">
					<section class="testi-container">
						<img src="./images/headerimg.jpg" alt="Avatar" style="width: 90px;" />
						<p><span><?php echo $row["username"]; ?></span><?php echo $row["email"];?></p>
						<p>Testimonial : <?php echo $row["feedback"];?></p>
					</section>
				</li>
    <?php
  }
} else {
  // Handle the case where no rows were returned
  echo "0 results";
}
?>
<?php 
$conn->close();
?>