<?php
	include "includes/connection.php";
	include 'includes/header_member.php';
?>
<body>	
	<!--main in a flex-->
	<main id="main" style="display: flex;"> 
	<section id="section1" style="display: flex;">   <!--adding section in a flex-->
	<?php
		$id = $_GET['data'];	//get the player id from the SQL query 	
		//select data from the player_info table for the particular player id
		$sql = "SELECT id, main_img, alt_name, name, role,details FROM player_info Where id=$id";
		$result = $con->query($sql);// get the result
		//checks if there is atleast one row returned from the query
		if ($result->num_rows > 0) {
			 //while loop checks through each row
			while($row = $result->fetch_assoc()) {	
				?>
		<!--displaying the image-->
     <img src="<?php echo $row['main_img']; ?>" height=600 width=400>
		</section>
		<!--displaying player's details-->
		<section id="section2" style="display: flex;">
			<h1><?php echo $row['name']; ?></h1>
			<h2><?php echo $row['role']; ?></h2>
			<p><?php echo $row['details']; ?></p></section>
		
		<?php 
    }
} else {
  echo "0 results";
}
$con->close();	?>	<!--database connection is closed here-->
	</main>
</body>

	
<?php
	include ("./includes/footer_member.php");
	?>