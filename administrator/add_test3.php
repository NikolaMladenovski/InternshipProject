<?php
 	include('dbcon.php');
	include('session.php');
	
	if(isset($_POST['selector'])){		
		$pred=$_POST['selector'];
 	    $ispit=$_POST['ispit_id'];
		$data=$_POST['ispit_data'];
		
		$godina=date_format(new DateTime($data),'Y');
		$pom=date_format(new DateTime($data),'n');
		$den=date_format(new DateTime($data),'d');
		if($pom==10 || $pom==11 || $pom==12)
			$uchebna_godina = $godina.'/'.($godina+1);
		else if($pom==9){
			if($den<=14)
				$uchebna_godina = ($godina-1).'/'.($godina);
			else
				$uchebna_godina = $godina.'/'.($godina+1);
		}
		else
			$uchebna_godina = ($godina-1).'/'.($godina);

		echo $pom;
		echo $godina;
		echo $uchebna_godina;
		
	mysqli_query($mysqli,"insert into testovi (predmet_id,prof_id,godina,data,ispit_id) values ('$pred','$session_id','$uchebna_godina','$data','$ispit')")or die(mysqli_error($mysqli));
	
	
 
}
header("location:testovi.php");

?>