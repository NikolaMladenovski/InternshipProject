<?php
include('session.php'); 
include('dbcon.php'); 
		
			
		
 	    $id=$_POST['id'];
	    $testpom1=$_POST['testpom'];
		$N = count($id);
		 
		$format=$_POST['format']; 

	
if($format==2)   
{	
for($i=0;$i<$N;$i++)
{
	$poeni=$_POST['poeni'];
		$ocenka=$_POST['oceni'];
	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	$num_row1=mysqli_num_rows($row1);
	if($num_row1 ==0 && $poeni[$i]!=NULL && $ocenka[$i]!=NULL){
		
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id,poeni, ocena) values ('$id[$i]','$testpom1','$poeni[$i]', '$ocenka[$i]')")or die(mysql_error());
	}
}
}
else if($format==0)
{
for($i=0;$i<$N;$i++){
	$poeni=$_POST['poeni'];
	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	$num_row1=mysqli_num_rows($row1);
	if($num_row1 ==0){
		
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id,poeni,ocena) values ('$id[$i]','$testpom1','$poeni[$i]','')")or die(mysql_error());
	}
}
}
else if($format==1)
{
for($i=0;$i<$N;$i++){
	$ocenka=$_POST['oceni'];
	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	$num_row1=mysqli_num_rows($row1);
	if($num_row1 ==0 ){
		
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id, poeni,ocena) values ('$id[$i]','$testpom1','', '$ocenka[$i]')")or die(mysql_error());
	}
}
}

header("location:stu_test.php");?>