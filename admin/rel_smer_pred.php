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

		<form method="post" action="rel_smer_pred_save.php">
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

								<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери предмети</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Предмет</th>                                 
                                        <th>Семестар</th>                                 
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $predmet_query=mysqli_query($mysqli,"select * from predmeti")or die(mysql_error());
									while($row=mysqli_fetch_array($predmet_query)){
									$id=$row['predmet_id'];  
									
									
									?>
									
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['predmet']; ?></td>
                                    <td><?php echo $row['semestar']; ?></td>
									
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input  class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												
                                    </td>
									
                                    </tr>
									<?php  
									}?>
                                </tbody>
                            </table>
							
			    </form>
			</div>		
			</div>		
	
			</div>
		</div>
    </div>
	</div>