<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar.php'); ?>

<?php include('sidebar.php'); ?>
<div style="position: relative; margin: 43px 0px 0px 252px;">
    <div class="container">
		<div class="margin-top">
			<div class="row">	
								

		<div class="span12">		

		<form method="post" action="rel_stu_pred.php">
<div class="span3">

			<div class="control-group">
				<label class="control-label" >Насока</label>
				<div class="controls">
				<select name="smer_id" class="chzn-select" required/>
				<option></option>
				<?php $result =  mysqli_query($mysqli,"select * from nasoki")or die(mysql_error()); 
				while ($row=mysqli_fetch_array($result)){ ?>
				<option value="<?php echo $row['smer_id']; ?>"><?php echo $row['smer']; ?></option>
				<?php } ?>
				</select>
				</div>
			</div>
				
				<div class="control-group"> 
					<div class="controls">

								<button  class="btn btn-success" >Понатаму</button>
					</div>
				</div>
				</div>
				</form>
				</div>		
			</div>		
	
			</div>
		</div>
    </div>
	</div>
