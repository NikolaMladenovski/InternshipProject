<?php
 	include('dbcon.php');
	include('session.php');

	
		$pred_id=$_POST['selector'];
 	    $smer_id=$_POST['smer_id'];
	    $N = count($pred_id);



	
     for($i=0;$i<$N;$i++)
{
	
	$rel_smer_pred_query1=mysqli_query($mysqli,"select *  from rel_smer_pred where predmet_id='$pred_id[$i]' and smer_id='$smer_id'  ")or die(mysql_error());
	$row1=mysqli_fetch_array($rel_smer_pred_query1);
	if($row1 ==0)
	mysqli_query($mysqli,"insert into rel_smer_pred (smer_id,predmet_id) values ('$smer_id','$pred_id[$i]')")or die(mysqli_error($mysqli));
	 
	
}
 
header("location: rel_smer_pred.php");
?>
	