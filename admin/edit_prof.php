<?php include('header.php'); ?>
<?php include('session.php'); ?>

<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		
		
		
		$query=mysqli_query($mysqli,"select * from profesori where prof_id='$get_id'")or die(mysql_error());
		$row=mysqli_fetch_array($query);
		
		
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Измени</div>
			<p><a class="btn btn-info" href="users.php"><i class="icon-arrow-left icon-large"></i>&nbsp Назад</a></p>
	<div class="addstudent">
	<div class="details">Внеси податоци</div>	
	<form class="form-horizontal" method="POST" action="update_prof.php" enctype="multipart/form-data">
			
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
			<label class="control-label" for="inputEmail">Корисничко име:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="username" value="<?php echo $row['username']; ?>" placeholder="Индекс" required>
			
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Лозинка:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="pass" value="<?php echo $row['pass']; ?>" placeholder="Индекс" required>
			
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
