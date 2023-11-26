<?php
	// Database configuration 
	$dbHost     = "localhost"; 
	$dbUsername = "root"; 
	$dbPassword = ""; 
	$dbName     = "logindb"; 
	 
	// Create database connection 
	$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
	 
    if($con)
    {
       echo "Connection successful";
    }
    else
    {
        echo "Connection fail";
    }
	// Check connection 
	if ($con->connect_error) { 
	    die("Connection failed: " . $con->connect_error); 
	}
 ?>
