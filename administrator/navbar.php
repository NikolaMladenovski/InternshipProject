
<div class="w3-top">

  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
	<a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-black">Најавени сте како: Професор</a>
	<?php  
		
								    
		$prof_query=mysqli_query($mysqli,"select *  from profesori where prof_id='$session_id' ")or die(mysql_error());
		$row=mysqli_fetch_array($prof_query);
		
		$ime=$row['ime']; 
		$prezime=$row['prezime']; 
	
	?>
	<a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white" style="margin-right: 0px; position:relative; float:right;">Одјави се</a>
	<a href="#" class="wr-bar-tem w3-button w3-hide-small w3-hide-medium w3-hover-black" style="margin-right: 0px; position:relative; float:right;"><?php echo $ime." ".$prezime;?></a>

  </div>
</div>