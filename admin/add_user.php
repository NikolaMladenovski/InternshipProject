<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             
			<p><a href="users.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details" style="background-color:black;">Внеси информации за студентот</div>		
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
			<label class="control-label" >ИНДЕКС:</label>
			<div class="controls">
			<input type="text" class="span4"  name="indeks"  placeholder="Индекс" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" >Насока:</label>
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
$indeks=$_POST['indeks'];
$smer=$_POST['smer'];
$god=date("Y");






								
mysqli_query($mysqli,"insert into studenti (indeks,ime,prezime,smer_id,god_na_zap)
 values('$indeks','$name','$surname','$smer','$god')")or die(mysql_error());
 
 
 
}
?>	