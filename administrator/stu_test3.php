<?php
  include('session.php'); 
include('dbcon.php'); 
		
			
		
 	    $id=$_POST['id'];
	    $testpom1=$_POST['testpom'];
		$N = count($id);
		$poeni=$_POST['poeni'];


	
     
for($i=0;$i<$N;$i++)
{
	$rel_stu_test_query1=mysqli_query($mysqli,"select * from rel_stu_test where student_id='$id[$i]' and test_id='$testpom1'")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_stu_test_query1);
	if($row1 ==0 && $poeni!=NULL && $poeni[$i]!=""){
		echo 'a'.$poeni[$i].'a';
		mysqli_query($mysqli,"insert into rel_stu_test (student_id,test_id,poeni) values ('$id[$i]','$testpom1','$poeni[$i]')")or die(mysql_error());
	}
	
}
 
header("location:stu_test.php");
	
?>