<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"delete from studenti where student_id='$id'") or die(mysql_error());
mysqli_query($mysqli,"delete from rel_stu_pred where student_id='$id'") or die(mysql_error());
mysqli_query($mysqli,"delete from rel_stu_test where student_id='$id'") or die(mysql_error());
header('location:users.php');
?>