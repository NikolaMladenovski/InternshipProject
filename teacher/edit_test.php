<?php include('header.php'); ?>
<?php include('session.php'); ?>

<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		
		
		//$query=mysqli_query($mysqli,"select * from studenti LEFT JOIN nasoki on nasoki.smer_id  = student.smer_id where student_id='$get_id'")or die(mysql_error());
		$query=mysqli_query($mysqli,"select * from studenti where student_id='$get_id'")or die(mysql_error());
		$row=mysqli_fetch_array($query);
		$smer_id = $row['smer_id'];
		$c_query=mysqli_query($mysqli,"select smer from nasoki where smer_id=$smer_id");
	    $c_row=mysqli_fetch_array($c_query);
		$c = $c_row['smer'];
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Измени</div>
			<p><a class="btn btn-info" href="users.php"><i class="icon-arrow-left icon-large"></i>&nbsp Назад</a></p>
	<div class="addstudent">
	<div class="details">Внеси податоци</div>	
	<form class="form-horizontal" method="POST" action="update_test.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Име:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="ime" value="<?php echo $row['ime']; ?>" placeholder="Име" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="id" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Презиме:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="prezime" value="<?php echo $row['prezime']; ?>" placeholder="Презиме" required>
			
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Индекс:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="indeks" value="<?php echo $row['indeks']; ?>" placeholder="Индекс" required>
			
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Насока:</label>
			<div class="controls">
			<select name="smer_id">
				<option value="<?php echo $smer_id; ?>"><?php echo $c; ?></option>
				<?php $query1 = mysqli_query($mysqli,"select * from nasoki where smer_id != '$smer_id'")or die(mysql_error());
				while($row1 = mysqli_fetch_array($query1)){
				?>
				<option value="<?php echo $row1['smer_id']; ?>"><?php echo $row1['smer']; ?></option>
				<?php } ?>
			</select>
			</div>
		</div>
		
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Измени</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
