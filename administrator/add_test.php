<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             
			<p><a href="testovi.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details" style="background-color:black;">Внеси информации за тестот</div>		
	<form class="form-horizontal" method="POST" action="add_test2.php"  enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputPassword">Семестар:</label>
			<div class="controls">
			<select name="semestar" required>
				
				<option>I</option>
				<option>II</option>
				<option>III</option>
				<option>IV</option>
				<option>V</option>
				<option>VI</option>
				<option>VII</option>
				<option>VIII</option>
			</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" >Смер:</label>
			<div class="controls">
			
			<select name="smer">
			<?php
			$smer_query = mysqli_query($mysqli,"select * from nasoki");
			while($smer_row = mysqli_fetch_array($smer_query)){
			?>
			<option value="<?php echo $smer_row['smer_id']; ?>"><?php echo $smer_row['smer']; ?></option>
			<?php  } ?>
			</select>
			</div>

		</div>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-plus icon-large"></i>&nbsp;Понатаму</button>
			</div>
		</div>
		</div>
		</div>
		
		
		
		
		
		
    </form>					
			</div>		
			</div>		
			</div>
		

