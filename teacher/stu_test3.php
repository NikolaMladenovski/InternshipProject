<?php
  include('session.php'); 
include('dbcon.php'); 
		
			
		
 	    $id=$_POST['id'];
	    $testpom1=$_POST['testpom'];
		$N = count($id);
		
		$format=$_POST['format']; //0, 1 ili 2, tipot na rezultati

	$nula=0;
if($format==2){ 
$poeni=$_POST['poeni'];
$ocenka=$_POST['oceni']; //ocenkite koishto se vneseni

for($i=0;$i<$N;$i++)
{
	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	//mora i  poeni i ocenka, da e vneseno, kje ja vnese taa relacija 
	if($row1 ==0 && $poeni[$i]!=NULL && $ocenka[$i]!=NULL){
		echo 'a'.$poeni[$i].'b'.$ocenka[$i];
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id,poeni,ocena) values ('$id[$i]','$testpom1','$poeni[$i]','$ocenka[$i]')")or die(mysql_error());
	}
}
}
if($format==0){
$poeni=$_POST['poeni'];

for($i=0;$i<$N;$i++){

	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	//ili  poeni ili ocenka, da e vneseno, kje ja vnese taa relacija 
	if($row1 ==0 && $poeni[$i]!=NULL){
		
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id,poeni,ocena) values ('$id[$i]','$testpom1','$poeni[$i]','$nula')")or die(mysql_error());
	}
}
}
if($format==1){
$ocenka=$_POST['oceni']; //ocenkite koishto se vneseni
for($i=0;$i<$N;$i++){
	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	//ili  poeni ili ocenka, da e vneseno, kje ja vnese taa relacija 
	if($row1 ==0 && $ocenka[$i]!=NULL){
		
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id,poeni, ocena) values ('$id[$i]','$testpom1','$nula', '$ocenka[$i]')")or die(mysql_error());
	}
}
}
header("location:stu_test.php");
	
?>