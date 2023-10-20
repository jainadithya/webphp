

<?php
include "./includes/header.php";
$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$dbname = "member";


// Create connection
$conn = new mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, href, src, alt_name, Name, Role FROM player_details";
$sql1 = "SELECT firstname, type FROM member_access";





$result = $conn->query($sql);
$result1 = $conn->query($sql1);



if ($result->num_rows > 0) {
    // output data of each row
      while($row1 = $result1->fetch_assoc()){?>
          <h1 style="<?php echo $row1['type'] == 1 ? "display:block;" : "display:none;" ?>"><?php echo $row1['firstname']; ?> have acess</h1>
          <h1 style="<?php echo $row1['type'] == 2 ? "display:block;" : "display:none;" ?>"><?php echo $row1['firstname']; ?>  no have acess</h1>
  <?php
    while($row = $result->fetch_assoc()) {
          ?>
      
        <figure style="<?php echo $row1['type'] == 1 ? "display:block;" : "display:none;" ?>">
                <a  href= "<?php echo $row['href']; ?>">
  
                  <img src="<?php echo $row['src']; ?>" alt="<?php echo $row['alt_name']; ?>">
                  <figcaption>
                <h2><?php echo $row['Name']; ?></h2>
              </figcaption>
                </a>
                <p><?php echo $row['Role']; ?></p>
              </figure>
          
  <?php 
    }}
} else {
  echo "0 results";
}
$conn->close();

	include ("./includes/footer.php");
	?>