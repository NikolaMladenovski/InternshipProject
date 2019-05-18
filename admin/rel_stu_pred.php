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

		<form method="post" action="rel_stu_pred_save.php">
<div class="span3">

											<div class="control-group">
				<label class="control-label" >Студент</label>
				<div class="controls">
				<select name="student_id" class="chzn-select" required/>
				<option></option>
				
				<?php $pom=$_POST['smer_id'];?>
				<?php $result =  mysqli_query($mysqli,"select * from studenti where smer_id='$pom'")or die(mysql_error()); 
				while ($row=mysqli_fetch_array($result)){ ?>
				<option value="<?php echo $row['student_id']; ?>"><?php echo $row['indeks']; ?></option>
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
                                        <th>Професор</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $predmet_query=mysqli_query($mysqli,"select * from rel_smer_pred where smer_id='$pom'")or die(mysql_error());
									while($row=mysqli_fetch_array($predmet_query)){
									$pom2=$row['predmet_id'];  
									$predmet2_query=mysqli_query($mysqli,"select * from predmeti where predmet_id='$pom2'")or die(mysql_error());
									$row2=mysqli_fetch_array($predmet2_query);
									
									?>
									
									<tr class="del<?php echo $pom ?>">
									
									                              
                                    <td><?php echo $row2['predmet']; ?></td>
                                    <td><?php echo $row2['semestar']; ?></td>
									<td>
									<div class="controls">
				<select name="prof_id[]" class="chzn-select" >
				<option></option>
				
				
				<?php $result =  mysqli_query($mysqli,"select * from rel_prof_pred where predmet_id='$pom2'")or die(mysql_error()); 
				while ($row=mysqli_fetch_array($result)){
					$prof_pom=$row['prof_id'];
					$prof_query= mysqli_query($mysqli,"select * from profesori where prof_id='$prof_pom'")or die(mysql_error());
					while($row_pom=mysqli_fetch_array($prof_query))
					{
					?>
				<option value="<?php echo $row['rel_prof_pred_id']; ?>"><?php echo $row_pom['ime']." ".$row_pom['prezime']; ?></option>
				<?php } 
				}?>
				</select>
				</div></td>
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $pom2; ?>" >
												
                                    </td>
									
                                    </tr>
									<?php  
									}?>
                                </tbody>
                            </table>
							
			    </form>
			</div>		
			</div>		
<script>		
$(".uniform_on").change(function(){
    var max=6;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
	</div>


