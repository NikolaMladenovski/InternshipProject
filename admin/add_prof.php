<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             
			<p><a href="prof.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details" style="background-color:black;">Внеси информации за професорот</div>		
	<form class="form-horizontal" method="POST"  enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" >ИМЕ:</label>
			<div class="controls">
			<input type="text" class="span4"  name="name"  placeholder="Име" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >ПРЕЗИМЕ:</label>
			<div class="controls">
			<input type="text" class="span4"  name="surname"  placeholder="Презиме" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >КОРИСНИЧКО ИМЕ:</label>
			<div class="controls">
			<input type="text" class="span4"  name="username"  placeholder="Индекс" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >ЛОЗИНКА:</label>
			<div class="controls">
			<input type="text" class="span4"  name="pass"  placeholder="Индекс" required>
			</div>
		</div>
		<div class="control-group">
			
			<div class="controls">
			
			<select name="tip">
			
			<option value="<?php echo '0' ?>"><?php echo 'Професор' ?></option>
			<option value="<?php echo '1' ?>"><?php echo 'Администратор'?></option>
			</select>
			</div>

		</div>
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Зачувај</button>
			</div>
		</div>
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
$name=$_POST['name'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$pass=$_POST['pass'];
$tip=$_POST['tip'];




								
mysqli_query($mysqli,"insert into profesori (ime,prezime,username,pass,administrator)
 values('$name','$surname','$username','$pass','$tip')")or die(mysql_error());
 
 
 
}
?>	