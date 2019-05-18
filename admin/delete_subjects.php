<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"delete from predmeti where predmet_id='$id'") or die(mysql_error());
header('location:predmeti.php');
?>