<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php //include('navbar.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($mysqli,"select * from predmeti where predmet_id='$get_id'")or die(mysql_error());
		$row=mysqli_fetch_array($query);
		$semestar = $row['semestar'];
		
		//$category_id = $row['category_id'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Уреди предмет</div>
			<p><a class="btn btn-info" href="predmeti.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внеси информации за предметот</div>	
	<form class="form-horizontal" method="POST" action="update_subjects.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Име на предмет:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="predmet" value="<?php echo $row['predmet']; ?>" placeholder="Име на предмет" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
			</div>
		</div>
		
		<!--
		<div class="control-group">
			<label class="control-label" for="inputPassword">Семестар:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php //echo $category_id; ?>"><?php //еcho $row['classname']; ?></option>
				<?php//$query1 = mysqli_query($mysqli,"select * from category where category_id != '$category_id'")or die(mysql_error());
				//while($row1 = mysqli_fetch_array($query1)){ */
				?>
				<option value="<?php //echo $row1['category_id']; ?>"><?php //echo $row1['classname']; ?></option>
				<?php //} ?>
			</select>
			</div>
		</div>
		-->
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Семестар:</label>
			<div class="controls">
			<select name="semestar">
				<option value="<?php echo $semestar; ?>"><?php echo $semestar; ?></option>
				<?php if($semestar != I)
					echo  "
				<option value=\"I\">I</option>";
						
				if($semestar != II)
					echo  "
				<option value=\"II\">II</option>";
				if($semestar != III)
					echo  "
				<option value=\"III\">III</option> ";
				if($semestar != IV)
					echo  "
				<option value=\"IV\">IV</option> ";
				if($semestar != V)
					echo  "
				<option value=\"V\">V</option> ";
				if($semestar != VI)
					echo  "
				<option value=\"VI\">VI</option> ";
				if($semestar != VII)
					echo  "
				<option value=\"VII\">VII</option> ";
				if ($semestar != VIII)
					echo  "
				<option value=\"VIII\">VIII</option> ";
				
					?>
				
			</select>
			</div>
		</div>
		
		<!--
		<div class="control-group">
			<label class="control-label" for="inputPassword">Семестар:</label>
			<div class="controls">
			<select name="semestar">
				<option><?php echo $row['semestar']; ?></option>
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
		-->
		
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
<?php// include('footer.php') ?>