<?php

$dbhost = "localhost";
$dbuser = "phpmyadmin";
$dbpass = "root";
$dbname = "WeBees";

//connect to MySQL Server
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
session_start();
//check database connection
if(!$con){
	die ("Failed to Connect!" .mysqli_connect_error());
}
?>
