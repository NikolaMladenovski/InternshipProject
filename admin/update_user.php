<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$indeks=$_POST['indeks'];
$smer_id=$_POST['smer_id'];





mysqli_query($mysqli,"update studenti set ime='$ime',prezime='$prezime',indeks='$indeks',smer_id='$smer_id' where student_id='$id'")or die(mysql_error());
								
								
							 header('location:users.php');
}
?>	