<?php
	include "includes/connection.php";
	if(!isset($_SESSION["id"])){
		include 'includes/header.php';
	}
	else{
		include 'includes/header_member.php';
}
?>

<?php
	$userid = $_SESSION["id"];
	$new_query = "SELECT * FROM users WHERE username = '$userid'";
	$results = $con->query($new_query);
	$new = $results->fetch_assoc();
	$role = $new['userID'];
?>

<section id = "squad" class="player_info">
	<div class="container">
		<div  class="row">
			<?php
				$query = "SELECT * FROM player_info";
				$result = $con->query($query);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
			?>
			<div style="<?php echo $new['userID'] == "platinum" ? "display:block;" : "display:none;" ?>" class="col-sm-4">
				<a href="./player-detail.php?data=<?php echo $row['id']; ?>">
					<img src="<?php echo $row['src']; ?>" class="img-responsive" alt="<?php echo $row['alt_name']; ?>"> 
					<figcaption class="text-center"><?php echo $row['name']; ?></figcaption>
				 </a>
				 <p class="text-center"><?php echo $row['role']; ?></p>
			</div>
			<div  style="<?php echo $new['userID'] == "gold" ? "display:block;" : "display:none;" ?>" class="col-sm-4">
				
					<img src="<?php echo $row['src']; ?>" class="img-responsive" alt="<?php echo $row['alt_name']; ?>"> 
					<figcaption class="text-center"><?php echo $row['name']; ?></figcaption>
				
				 <p class="text-center"><?php echo $row['role']; ?></p>
			</div>
			<?php		
					}
				}
			?>
		</div>
	</div>
</section>
<?php
	include ("./includes/footer_member.php");
?>
