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

		<form method="post" action="stu_test3.php">
<div class="span3">

				
				<div class="control-group"> 
					<div class="controls">

								<button name="delete_student" class="btn btn-success"><i class="icon-save icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				<?php
if(isset($_POST['tes'])){	
$test_id=$_POST['tests'];
$testovi_query=mysqli_query($mysqli,"select * from testovi where test_id='$test_id'")or die(mysqli_error($mysqli));
$row4=mysqli_fetch_array($testovi_query);
$format=$row4['format'];
						
						?>
				<input type="hidden" name="testpom" value="<?php echo $test_id?>">
				<input type="hidden" name="format" value="<?php echo $format?>">

				<?php
}	
?>
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери студент</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Индекс</th>                                 
										<?php 
										if($format==0 || $format==2)
											echo "<th>Поени</th>";
										?>
										
										<?php 
										if($format==1 || $format==2)
											echo "<th>Оцена</th>";
										?>
										
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php 
								  	$null = NULL;
									
									$predmet_id =$row4['predmet_id']; 
									
								    $rel_query=mysqli_query($mysqli,"select * from rel_prof_pred where prof_id='$session_id' and predmet_id='$predmet_id'")or die(mysqli_error($mysqli));
									$row1=mysqli_fetch_array($rel_query);
									$rel_prof_pred_id=$row1['rel_prof_pred_id'];
									
									$rel_stu_pred_query=mysqli_query($mysqli,"select * from rel_stu_pred where rel_prof_pred_id='$rel_prof_pred_id'")or die(mysql_error());
									while($row3=mysqli_fetch_array($rel_stu_pred_query)){
									$student_id =$row3['student_id'];
									
								    $student_query=mysqli_query($mysqli,"select * from studenti where student_id='$student_id' ")or die(mysql_error());
									$row2=mysqli_fetch_array($student_query);
									$id=$row2['student_id']; 
									$indeks=$row2['indeks'];
									
									
									?>
									
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $indeks; ?></td>
                                    
									<input type="hidden" id="inputEmail" name="id[]" value="<?php echo $id;  ?>" placeholder="id">
									<input type="hidden" id="inputEmail" name="format" value="<?php echo $format;  ?>" placeholder="id">


									<?php include('toolttip_edit_delete.php'); ?>
									<?php
									if($format==0 || $format==2)
									echo "
                                    <td width=\"20\">
										<input class=\"uniform_on\" name=\"poeni[]\" type=\"number_format\" value=\"".$null."\">
                                    </td>";
									
									?>
									<?php 
									if($format==1 || $format==2)
									echo"
									<td width=\"20\">
										<input class=\"uniform_on\" name=\"oceni[]\" type=\"number_format\" value=\"".$null."\">
                                    </td>";
                                    ?>
									
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