<?php
    include_once('config.php');
    session_start();
    session_destroy();
    session_unset();
    session_unset();
    header("Location:loginForm.php");
?>
