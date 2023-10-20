<?php
	include('includes/connection.php');
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
    <nav class="navbar navbar-inverse nav-bar shadow" >
        <section style="margin: 3rem;" class="container-fluid">
          <section class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <!-- <img src="./images/headerimg.jpg" alt=""> -->
            <a class="navbar-brand font" href="./index_member.php">RCB Fan Page</a>
        </section>
          <section class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="./index_member.php">Home</a></li>
              <li><a href="./news_member.php">News</a></li>
              <li><a href="./player_new.php">Players</a></li>
              <li><a href="./about_member.php">About Us</a></li>
              <li><a href="./contact_member.php">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./logout.php" class="font">Logout</a></li>
            </ul>
        </section>
        </section>
    </nav>