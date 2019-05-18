<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"delete from testovi where test_id='$id'") or die(mysql_error());
mysqli_query($mysqli,"delete from rel_stu_test where test_id='$id'") or die(mysql_error());
mysqli_query($mysqli,"delete from rel_test_smer where test_id='$id'") or die(mysql_error());




header('location:testovi.php');
?>