<?php
	include('includes/connection.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <nav class="navbar navbar-inverse nav-bar shadow" >				<!-- nav container using bootstrap w3school-->
        <section style="margin: 3rem;" class="container-fluid">		<!-- making it responsive by toggle and collapse-->
          <section class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand font" href="./index.php">RCB Fan Page</a>	<!-- header -->
        </section>
          <section class="collapse navbar-collapse" id="myNavbar">				<!-- elements in nav bar -->
            <ul class="nav navbar-nav">
              <li><a href="./index.php">Home</a></li>							<!-- elements in nav bar -->
              <li><a href="./news.php">News</a></li>							<!-- elements in nav bar -->
			  <!--<li><a href="./players.php">Players</a></li>-->				<!-- elements in nav bar -->
              <!-- <li><a href="#">Shop</a></li> -->							<!-- elements in nav bar -->
              <li><a href="./about.php">About Us</a></li>						<!-- elements in nav bar -->
              <li><a href="./contact.php">Contact</a></li>						<!-- elements in nav bar -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="register.php" class="font"><span class="glyphicon glyphicon-user"></span>Register</a></li><!-- elements in nav bar -->
              <li><a href="log.php" class="font"><span class="glyphicon glyphicon-log-in"></span> Login</a></li><!-- elements in nav bar -->
            </ul>
        </section>
        </section>
    </nav>