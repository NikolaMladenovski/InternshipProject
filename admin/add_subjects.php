<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
            <p><a href="predmeti.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details" style="background-color:black;">Внеси предмет</div>		
	<form class="form-horizontal" method="POST"  enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Име на предмет:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="predmet"  placeholder="Име на предмет" required>
			</div>
		</div>
		
		
		

		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Семестар:</label>
			<div class="controls">
			<select name="semestar" required>
				<option></option>
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
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Зачувај</button>
			</div>
		</div>
		
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$predmet=$_POST['predmet'];
$predmet=$_POST['predmet'];
$semestar = $_POST['semestar'];





								
mysqli_query($mysqli,"insert into predmeti (predmet, semestar)
 values('$predmet', '$semestar')")or die(mysql_error());
 
 
 
}
?>	