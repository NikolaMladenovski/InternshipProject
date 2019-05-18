<?php
 	include('dbcon.php');
	include('session.php');

	
		$pred_id=$_POST['selector'];
 	    $student_id=$_POST['student_id'];
		$prof_pom=$_POST['prof_id'];
	    $N = count($pred_id);
		/*if($prof_pom['0']=="")
		{
			
echo $N;
		}
echo 'nesto'.$pred_id['0'].'dodadi'.$pred_id['2'];
echo 'nesto'.$prof_pom['0'].'dodadi'.$prof_pom['2'] ;

echo $M;*/
$M = count($prof_pom);
	for($i=0;$i<$M;$i++)
	{
	//$rel_prof_pred_query=mysqli_query($mysqli,"select * from rel_prof_pred where predmet_id='$pred_id[$i]' and prof_id='$prof_id[$i]'")or die(mysql_error());
	//$row2=mysqli_fetch_array($rel_prof_pred_query);
	//echo $row2['rel_prof_pred_id'];
	//$rel_stu_pred_query1=mysqli_query($mysqli,"select * from rel_stu_pred where student_id='$student_id' and rel_prof_pred_id='$row2['rel_prof_pred_id']'")or die(mysql_error());
	//$row1=mysqli_fetch_array($rel_stu_pred_query1);
	if($prof_pom[$i]!="")
	{
		
		$rel_stu_pred_query1=mysqli_query($mysqli,"select * from rel_stu_pred where student_id='$student_id' and rel_prof_pred_id='$prof_pom[$i]'")or die(mysql_error());
	    $row1=mysqli_fetch_array($rel_stu_pred_query1);
		if($row1==0)
		{
	mysqli_query($mysqli,"insert into rel_stu_pred (student_id,rel_prof_pred_id) values ('$student_id','$prof_pom[$i]')")or die(mysqli_error($mysqli));
		}
	}
	
	}
 
header("location: rel_stu_pred2.php");
?>