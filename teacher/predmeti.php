<?php include('header.php'); ?>
<?php include('session.php'); ?>

<html>

			
			
	
				 <!-- Navbar -->
				<?php include('navbar.php'); ?>

				<!-- Sidebar -->
				<?php include('sidebar.php'); ?>
			
			
			<div style="position: relative; margin: 43px 0px 0px 252px;">

			
						
						<div class="title">
						<h3>Листа од предмети</h3>
						</div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
								
								
                                <thead>
                                    <tr>
									                                     
                                        <th>Име на предмет</th>
                                        <th>Семестар</th>                                 		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
								  $rel_prof_pred_query=mysqli_query($mysqli,"select * from rel_prof_pred where prof_id='$session_id'")or die(mysqli_error($mysqli));
								  while($row2=mysqli_fetch_array( $rel_prof_pred_query)){
									$id=$row2['predmet_id'];  

									
								  $user_query=mysqli_query($mysqli,"select * from predmeti where predmet_id ='$id'")or die(mysqli_error($mysqli));
									$row=mysqli_fetch_array($user_query);
									$name=$row['predmet'];
									$semestar=$row['semestar'];?>
									<tr class="del<?php echo $id; ?>">
                                    
									<td><?php echo $name; ?></td>
                                    <td><?php echo $semestar; ?></td>
									<?php } ?>
									
								  
                           
                                </tbody>
                            </table>
						</div>
			
					
	
</html>