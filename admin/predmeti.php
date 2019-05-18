<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>


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
								
								<p><a href="add_subjects.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Додади предмет</a></p>
							
                                <thead>
                                    <tr>
									                                     
                                        <th>Име на предмет</th>
                                        <th>Семестар</th>                                 
										<th class="action">Измени</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									
										
								  $user_query=mysqli_query($mysqli,"select * from predmeti")or die(mysqli_error($mysqli));
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['predmet_id'];  
									$name=$row['predmet'];
									$semestar=$row['semestar'];

									
									
									?>
									<tr class="del<?php echo $id ?>">
                                    
									<td><?php echo $row['predmet']; ?></td>
                                    <td><?php echo $row['semestar']; ?></td>

									
									 
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        
										<a  rel="tooltip"  title="Уреди" id="e<?php echo $id; ?>" href="edit_subject.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
						</div>
			
					
	
</html>