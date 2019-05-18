<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php //include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Додади предмет</div>
			<p><a href="books.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внесете информации</div>		
	<form class="form-horizontal" method="POST"  enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Име на предмет:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="subject_name"  placeholder="Име на предмет" required>
			</div>
		</div>
		
			<!--
			<div class="control-group">
			<label class="control-label" for="inputPassword">Category</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
			<?php
			$cat_query = mysqli_query($mysqli,"select * from category");
			while($cat_row = mysqli_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; ?></option>
			<?php  } ?>
			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Author:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Author" required>
			</div>
		</div>
		

		
		

		<div class="control-group">
			<label class="control-label" for="iionputPassword">Book Copies:</label>
			<div class="controls">
			<input type="text" class="span1" id="inputPassword" name="book_copies"  placeholder="" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Book Publication:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="book_pub"  placeholder="book_pub" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Publisher Name:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="publisher_name"  placeholder="Publisher Name" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="ISBN" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Copyright Year:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="Copyright Year" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Status:</label>
			<div class="controls">
			<select name="status" required>
				<option></option>
				<option>New</option>
				<option>Old</option>
				<option>Lost</option>
				<option>Damage</option>
				<option>Subject for Replacement</option>
			</select>
			</div>
		</div>
		
		-->
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
<?php// include('footer.php') ?>
<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$subject_name=$_POST['subject_name'];
//$category_id=$_POST['category_id'];
//$author=$_POST['author'];
//$book_copies=$_POST['book_copies'];
//$book_pub=$_POST['book_pub'];
//$publisher_name=$_POST['publisher_name'];
//$isbn=$_POST['isbn'];
//$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
//$status=$_POST['status'];




								
mysqli_query($mysqli,"insert into predmeti (predmet)
 values('$subject_name')")or die(mysql_error());
 
 
 
}
?>	