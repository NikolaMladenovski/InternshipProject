<?php
  include('session.php'); 
include('dbcon.php'); 
		
			
		
 	    $rel_id=$_POST['prisutni_id'];
	    $rel_poeni=$_POST['prisutni_poeni'];
		$N = count($rel_id);



	
     
for($i=0;$i<$N;$i++)
{
	mysqli_query($mysqli,"update rel_stu_test set poeni='$rel_poeni[$i]' where rel_stu_test_id='$rel_id[$i]'")or die(mysql_error());
	
}
 
header("location:test_poeni.php");
	
?>