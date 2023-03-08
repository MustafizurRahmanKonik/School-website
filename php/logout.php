<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
session_destroy();
unset($_SESSION["loggedin"]);
 
    header("location: /school/index.php");
    exit;

 ?>