<?php
 	include('dbcon.php');
	include('session.php');

	
		$pred_id=$_POST['selector'];
 	    $prof_id=$_POST['prof_id'];
	    $N = count($pred_id);



	
     for($i=0;$i<$N;$i++)
{
	
	$rel_prof_pred_query1=mysqli_query($mysqli,"select * from rel_prof_pred where predmet_id='$pred_id[$i]' and prof_id='$prof_id'  ")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_prof_pred_query1);
	if($row1 ==0)
	mysqli_query($mysqli,"insert into rel_prof_pred (prof_id,predmet_id) values ('$prof_id','$pred_id[$i]')")or die(mysqli_error($mysqli));
	 
	
}
 
header("location: rel_prof_predmet.php");
?>
	