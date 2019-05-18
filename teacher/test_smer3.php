<?php
  include('session.php'); 
include('dbcon.php'); 
		
			if(isset($_POST['selector'])){
		
 	    $smer=$_POST['selector'];
	    $testpom1=$_POST['testpom'];
		$N = count($smer);

	


	
     
for($i=0;$i<$N;$i++)
{
	$rel_test_smer_query1=mysqli_query($mysqli,"select *  from rel_test_smer where test_id='$testpom1' and smer_id='$smer[$i]'  ")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_test_smer_query1);
	if($row1 ==0)
	mysqli_query($mysqli,"insert into rel_test_smer (test_id,smer_id) values ('$testpom1','$smer[$i]')")or die(mysqli_error($mysqli));
	 
	
}
			}
header("location:test_smer.php");
	
?>