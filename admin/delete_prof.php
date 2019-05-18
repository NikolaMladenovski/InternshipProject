<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"delete from profesori where prof_id='$id'") or die(mysql_error());

header('location:prof.php');
?>