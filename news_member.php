<?php
	include "includes/connection.php";
	include 'includes/header_member.php';
?>
<main>	
	<!--main in a flex-->
  <!--adding section in a flex-->
	<?php
		//get the player id from the SQL query 	
		//select data from the player_info table for the particular player id
		$sql = "SELECT * FROM news";
		$result = $con->query($sql);// get the result
		//checks if there is atleast one row returned from the query
		if ($result->num_rows > 0) {
			 //while loop checks through each row
			while($row = $result->fetch_assoc()) {	
				
				if($row['newsID']%2 == 0) {
				?>
		<!--displaying the image-->
						<section class="news-section">		<!-- container to hold single image and a para -->
							<img class="newspg-img" style="padding-top: 5rem;" src="<?php echo $row['newsImage']; ?>" alt="" />
							<section class="space">
								<h2>
									<?php echo $row['postTitle']; ?>
								</h2>
								<!-- header of the news -->
								<p>
									<?php echo $row['postArticle']; ?></p>

								<p class="collapse" id="collapse<?php echo $row['newsID']; ?>">
									<?php echo $row['postDetails']; ?>
								</p>
									<button  id ="showmore"class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?php echo $row['newsID']; ?>" aria-expanded="false" aria-controls="collapseExample">
									Read	
								</button><!-- para of news -->
							</section>
						</section>
							<?php 
				}else{
					?>
		<!--displaying the image-->
						<section class="news-section">		<!-- container to hold single image and a para -->

								<section class="space">
									<h2>
										<?php echo $row['postTitle']; ?>
									</h2>
									<!-- header of the news -->
									<p>
										<?php echo $row['postArticle']; ?></p>

									<p class="collapse" id="collapse<?php echo $row['newsID']; ?>">
										<?php echo $row['postDetails']; ?>
									</p>
										<button  id ="showmore"class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse<?php echo $row['newsID']; ?>" aria-expanded="false" aria-controls="collapseExample">
										Read	
									</button><!-- para of news -->
								</section>
							<img class="newspg-img" style="padding-top: 5rem;" src="<?php echo $row['newsImage']; ?>" alt="" />
						</section>
			<?php 
					}
			}
} else {
  echo "0 results";
}
$con->close();	?>	<!--database connection is closed here-->
	
</main>

	
<?php
	include ("./includes/footer_member.php");
	?>