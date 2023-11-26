<?php

    session_start();

    // include database connectivity file

    include_once('config.php');

    if (isset($_POST['email'])) {

	$email 	  = $con->real_escape_string($_POST['email']);
	$password = $con->real_escape_string(md5($_POST['password']));

	$query = "SELECT * FROM students WHERE email ='$email' && password ='$password'";
    
	$result = $con->query($query);
        $row = $result->fetch_assoc();

        if($result->num_rows > 0) {
             $_SESSION['id'] = $row['id'];
	     $_SESSION['username'] = $row['username'];
             echo 1;
        }else{
             echo 0;
        }
    }
?>
