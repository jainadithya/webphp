<?php
	include "includes/connection.php";
	include ("./includes/header.php");
	?>
<main>
	<h2 class="rcb-header">#Royal Challengers Bangalore Fan Page</h2>
	<section
		id="myCarousel"
		class="carousel slide hme-main-img"
		data-ride="carousel"
		data-interval="8000"
	>	<!-- Have used bootstrap from w3school to do this navigation bar -->
		<ul class="carousel-inner">	<!-- containers with the images -->
			<li class="item active c-item img-container">
				<a href="./news.php"
					><img
						class="c-img"
						style="margin: auto;"
						src="./images/news1.jpg"
						alt="Slide 1"
				/></a>
			</li>
			<li class="item c-item img-container">
				<a href="./news.php"
					><img
						class="c-img"
						style="margin: auto;"
						src="./images/news2.jpg"
						alt="Slide 2"
				/></a>
			</li>
			<li class="item c-item img-container">
				<a href="./news.php"
					><img
						class="c-img"
						style="margin: auto;"
						src="./images/news3.jpg"
						alt="Slide 3"
				/></a>
			</li>
		</ul>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</section>

	<h2 class="rcb-header">News</h2>	<!-- header for news section -->
	<section class="shadow">
		<section style="display: flex;">
			<section
				class="card text-center"
				style="
					width: 50rem;
					
					border-radius: 15px;
					margin: 1rem;
					box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
					background-color: #222;
					color: white;
				"
			>		<!-- have used cards from bootstrap w3school and added few inline style-->
				<section class="card-body" style="overflow:auto;">
					<h3 style="margin: 1rem;" class="card-title">	<!-- news header -->
						Said to the boys that if we get two or three early wickets, it will be hard
						for them: Faf du Plessis on RCB’s sublime win against LSG
					</h3>
					<p style="margin: 1rem;" class="card-text">		<!-- news para -->
						The Royal Challengers Bangalore (RCB) pulled off an extraordinary win
						against the Lucknow Super Giants (LSG) in their own backyard, as Faf du
						Plessis’ men defended a 127-run target to register a famous 18-run win.
						Opting to bat first, RCB put on a par score of 126 on the board, thanks
						mainly to knocks from Faf (44), Virat Kohli (31) and a handy 11-ball 16 from
						Dinesh Karthik on a pitch that had a lot of assistance for the spinners.
						 Despite an injury to KL Rahul, LSG would have thought they had the upper
						hand at the break, but the RCB bowlers had better ideas in mind.
					</p>
				</section>
			</section>

			<section
				class="card text-center"
				style="
					width: 50rem;
					border-radius: 15px;
					margin: 1rem;
					box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
					background-color: #222;
					color: white;
				"
			>		<!-- have used cards from bootstrap w3school and added few inline style-->
				<section class="card-body" style="overflow:auto;">
					<h3 style="margin: 1rem;" class="card-title">	<!-- news header -->
						From Faf du Plessis to Karn Sharma: Top three performances for RCB against
						LSG
					</h3>
					<p style="margin: 1rem;" class="card-text">		<!-- news para -->
						The Royal Challengers Bangalore seized their fifth win of the season as they
						romped over the Lucknow Super Giants in a low-scoring battle at the Ekana
						Sports City. Tempers flared after the game with a heated altercation between
						a few members of both teams but that did very little to dampen the mood in
						the RCB dugout as they climbed up to the 5th position of the points table.
						Led by skipper Faf du Plessis’ 40-ball 4, RCB managed to amass 126 runs on
						the board, while Virat Kohli’s 31 played the perfect two to tango. Albeit
						LSG’s batting unit came a cropper with KL Rahul’s injury proving to be a
						major impediment.
					</p>
					<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
				</section>
			</section>

			<section
				class="card text-center"
				style="
					width: 50rem;
					border-radius: 15px;
					margin: 1rem;
					box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
					background-color: #222;
					color: white;
				"
			>		<!-- have used cards from bootstrap w3school and added few inline style-->
				<section class="card-body" style="overflow:auto;">
					<h3 style="margin: 1rem;" class="card-title">	<!-- news header -->
						A few of our guys are quite passionate: Josh Hazlewood opens up on a famous
						win for RCB against LSG in IPL 2023
					</h3>
					<p style="margin: 1rem;" class="card-text">		<!-- news para -->
						It was a memorable encounter between the Royal Challengers Bangalore and the
						Lucknow Super Giants in the latter’s den where runs were hard to come by and
						the RCB bowlers produced a nail-biting finish in a low-scoring thriller. RCB
						secured the bragging rights of the game as they trumped LSG by 18 runs,
						adding two more points to their tally. Batting first, RCB could post just
						126/9 from their 20 overs, thanks to a motivated showdown from captain Faf
						du Plessis, who himself scored a 40-ball 44 while Virat Kohli’s 31 also
						played a major hand in the team putting up a challenging total.
					</p>
				</section>
			</section>
		</section>
	</section>

	<h2 class="rcb-header">Login Here</h2>		<!-- login form header -->
	<section class="container-fluid">			<!-- login form starts got help from w3school bootstrap-->
		<section class="row main-content bg-success text-center">	<!-- main container for form -->
			<section class="col-md-4 text-center company__info">	<!-- section to add image -->
				<img class="login-img" src="./images/headerimg.jpg" alt="" />
			</section>
			<section class="col-md-8 col-xs-12 col-sm-12 login_form">	<!-- form section -->
				<section class="container-fluid">
					<section class="row">
						<h2>Member Login</h2>							<!-- form header -->
					</section>
					<section class="row">								<!-- contents in form -->
						<form action="login.php" method="post" control="" class="form-group">
							<section class="row">
								<input for="username"
									type="text"
									name="username"
									id="username"
									class="form__input"
									placeholder="Username"
								/>										<!-- user name field -->
							</section>
							<section class="row">
								<span class="fa fa-lock"></span> 
								<input for="password"
									type="password"
									name="password"
									id="password"
									class="form__input"
									placeholder="Password"
								/>										<!-- password field -->
							</section>
							<section class="row">
								<input
									type="checkbox"
									name="remember_me"
									id="remember_me"
									class=""
								/>										<!-- remember me field -->
								<label for="remember_me">Remember Me!</label>
							</section>
							<section class="row">						<!-- submit button -->
								<input type="submit" value="Submit" class="btn" />
							</section>
						</form>
					</section>
					<section class="row">
						<p>Don't have an account? <a href="register.php">Register Here</a></p>
					</section>
				</section>
			</section>
		</section>
	</section>

	<h2 class="rcb-header">Testimonial</h2>				<!-- testimonial header -->
		<section style="height:250px; overflow:auto;margin:auto;">
	<?php include 'datafromsql.php'; ?>
	</section>
</main>
<?php
	include ("./includes/footer.php");
?>