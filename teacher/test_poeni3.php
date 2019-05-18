<?php
  include('session.php'); 
include('dbcon.php'); 
		
			
		
 	    $id=$_POST['prisutni_id'];
	    $testpom1=$_POST['testpom'];
		$N = count($id);
		
		$format=$_POST['format']; 

	
if($format==2){ 
$poeni=$_POST['poeni'];
$ocenka=$_POST['ocena']; 

for($i=0;$i<$N;$i++)
{
	
	
		
	    
		
		mysqli_query($mysqli,"update rel_stu_test set poeni='$poeni[$i]', ocena='$ocenka[$i]' where rel_stu_test_id='$id[$i]'")or die(mysql_error());
	
}
}
if($format==0){
$poeni=$_POST['poeni'];

for($i=0;$i<$N;$i++){

	
		
		
		mysqli_query($mysqli,"update rel_stu_test set poeni='$poeni[$i]' where rel_stu_test_id='$id[$i]'")or die(mysql_error());
	
}
}
if($format==1){
$ocenka=$_POST['ocena']; //ocenkite koishto se vneseni
for($i=0;$i<$N;$i++){
	
		
		
		mysqli_query($mysqli,"update rel_stu_test set  ocena='$ocenka[$i]' where rel_stu_test_id='$id[$i]'")or die(mysql_error());
	
}
}
header("location:test_poeni.php");
	
?>

	
