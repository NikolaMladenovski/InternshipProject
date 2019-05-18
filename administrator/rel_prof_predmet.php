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
				<div class="span8"  style="float:right; position:relative;">
						<form method="post" action="#">
							<div class="control-group">
							<label class="control-label" >Насока</label>
							<div class="controls">
							<select name="smer_id" class="chzn-select" onchange="this.form.submit()" required/>
							<option></option>
							<?php $result =  mysqli_query($mysqli,"select * from nasoki")or die(mysql_error()); 
							while ($row=mysqli_fetch_array($result)){ ?>
							<option value="<?php echo $row['smer_id']; ?>"><?php echo $row['smer']; ?></option>
							<?php } ?>
							</select>
							</div>
							</div>
						</form>
				</div>
		
		<form method="post" action="rel_prof_predmet_save.php" >
				<div class="span3" style="float:left; position:relative;">

				<div class="control-group" >
					<label class="control-label" >Професор</label>
					<div class="controls">
					<select name="prof_id" class="chzn-select" required/>
					<option></option>
					<?php $result =  mysqli_query($mysqli,"select * from profesori")or die(mysql_error()); 
					while ($row=mysqli_fetch_array($result)){ ?>
					<option value="<?php echo $row['prof_id']; ?>"><?php echo $row['ime'].' '.$row['prezime']; ?></option>
					<?php } ?>
					</select>
					</div>
				</div>
			
				<div class="control-group"> 
					<div class="controls">
						<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				<div class="span6" style="float:right; margin-right:200px;">
						
				
						<div class="alert alert-success"><strong>Одбери предмети</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Предмет</th>                                 
                                        <th>Семестар</th>                                 
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
									$proverka=false;
									if(isset($_POST['smer_id'])){
										$proverka=true;
										$smer_id=$_POST['smer_id'];
										$predmet_query=mysqli_query($mysqli,"select * from rel_smer_pred where smer_id='$smer_id' ")or die(mysqli_error($mysqli));
									}
									else
										$predmet_query=mysqli_query($mysqli,"select * from predmeti")or die(mysql_error());
									while($row=mysqli_fetch_array($predmet_query)){
									$id=$row['predmet_id']; 

									if(!$proverka){
										$predmet = $row['predmet'];
										$semestar = $row['semestar'];
									}
									else{
										$predmet2_query=mysqli_query($mysqli,"select * from predmeti where predmet_id='$id' ")or die(mysqli_error($mysqli));
										$row2=mysqli_fetch_array($predmet2_query);
										$predmet = $row2['predmet'];
										$semestar = $row2['semestar'];
									}
									
									?>
									
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $predmet; ?></td>
                                    <td><?php echo $semestar; ?></td>
									
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input  class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												
                                    </td>
									
                                    </tr>
									<?php  
									}?>
                                </tbody>
                            </table>
				</div>		
			    </form>
			</div>		
			
			
			
			
	
			</div>
		</div>
    </div>
	</div>