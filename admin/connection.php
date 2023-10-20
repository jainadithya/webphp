<?php

$dbhost = "localhost";		// the hostname of the db server
$dbuser = "phpmyadmin";		// the username for connecting to the db
$dbpass = "root";			// the password for connecting to the db
$dbname = "WeBees";			// the name of the database

//connect to MySQL Server
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);		// establishes a connection to the MySQL database
session_start();
//check database connection

    if(!$con)		// checks if the connection was unsuccessful and displays an error message with the reason for the failure
	{
        die("Failed to Connect!" .mysqli_connect_error());
    }
?>