<?php include('header.php'); ?>
<?php include('session.php'); ?>
<html>


 <!-- Navbar -->
<?php include('navbar.php');?>

<!-- Sidebar -->
	
				<?php include('sidebar.php');?>



<body id="myPage">
				
				
	
												<div style="position: relative; margin: 43px 0px 0px 252px;">

						
<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
								
								<p><a href="add_test2.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Додади тест</a></p>
							
                                <thead>
                                    <tr>
									    <th>Предмет</th>                                 
                                        <th>Учебна Година</th>
										<th>Дата на оддржување</th>

                                        <th>Испит</th>                                 
                                        										
                                        
										
										<th class="action">Избриши</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									
										
								  $test_query=mysqli_query($mysqli,"select * from testovi where prof_id='$session_id'")or die(mysqli_error($mysqli));
								  
									while($row=mysqli_fetch_array($test_query)){
									$id=$row['test_id'];  
									$pred=$row['predmet_id'];
									$god=$row['godina'];
									$data=$row['data'];
									$tip=$row['ispit_id'];
									
									?>
									<?php
									$pred_query=mysqli_query($mysqli,"select predmet from predmeti where predmet_id='$pred'")or die(mysqli_error($mysqli));
									$row_pred=mysqli_fetch_array($pred_query);
									$pom=$row_pred['predmet'];
									$ispit_query=mysqli_query($mysqli,"select ispit from tip_test where ispit_id='$tip'")or die(mysqli_error($mysqli));
									$row_ispit=mysqli_fetch_array($ispit_query);
									$pom2=$row_ispit['ispit'];
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $pom ?></td>
                                    <td><?php echo $god; ?></td>
									<td><?php echo $data; ?></td>

									<td><?php echo $pom2; ?></td>
                                    
									
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Избриши" id="<?php echo $id; ?>" href="#delete_test<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_test_modal.php'); ?>
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
						
							

			
			</div>	
			
</body>
</html>