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

		<form method="post" action="test_poeni3.php">
<div class="span3">

				
				<div class="control-group"> 
					<div class="controls">

								<button name="delete_student" class="btn btn-success"><i class="icon-save icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				<?php
if(isset($_POST['tes'])){	
$test_id=$_POST['tests'];?>
				<input type="hidden" name="testpom" value="<?php echo $test_id?>">
				<?php
}	
?>
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери студент</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Индекс</th>                                 
                                        <th>Поени</th>                                 
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
								    $rel_query=mysqli_query($mysqli,"select * from rel_stu_test where test_id='$test_id'")or die(mysql_error());
									while($row1=mysqli_fetch_array($rel_query)){
										$pom1=$row1['student_id'];
										$rel_id =$row1['rel_stu_test_id'];
										$poeni =$row1['poeni'];
								    $student_query=mysqli_query($mysqli,"select *  from studenti where student_id='$pom1' ")or die(mysql_error());
									$row2=mysqli_fetch_array($student_query);
									$id=$row2['student_id']; 
									$indeks=$row2['indeks'];
									
									
									?>
									
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $indeks; ?></td>
                                    
									
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input name="prisutni_id[]" type="hidden" value="<?php echo $rel_id; ?>" >
												<input name="prisutni_poeni[]" type="text" value="<?php echo $poeni; ?>" >
												
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