<?php

session_start();

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    
	header("location: users.php");

    exit();
}
$session_id=$_SESSION['id'];
?>