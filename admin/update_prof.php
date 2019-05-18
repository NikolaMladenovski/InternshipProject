<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$username=$_POST['username'];
$pass=$_POST['pass'];





mysqli_query($mysqli,"update profesori set ime='$ime',prezime='$prezime',username='$username',pass='$pass' where prof_id='$id'")or die(mysql_error());
								
								
							 header('location:prof.php');
}
?>	