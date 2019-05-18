<?php include('header.php'); ?>
<?php include('session.php'); ?>
<html>


 <!-- Navbar -->
<?php include('navbar.php');?>

<!-- Sidebar -->
	
				<?php include('sidebar.php');?>



<body id="myPage">
				
				

						<div style="position: relative; margin: 43px 0px 0px 252px;">
						
						<div class="title">
						<h3>Листа на студенти</h3>
						</div>
						<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
								
								
								
								
								<p><a href="add_user.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp; Додади студент</a></p>
								
                                <thead>
                                    <tr>
									    <th>Индекс</th>  

                                        <th>Име</th>
										
                                        <th>Презиме</th>                                 
                                        <th>Насока</th> 										
                                        
										
										<th class="action">Избриши/Измени</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
								  //mysqli_query($mysqli,"SET NAMES utf8"); 
										
								  $user_query=mysqli_query($mysqli,"select * from studenti")or die(mysqli_error($mysqli));
								  
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['student_id'];  
									$ind=$row['indeks'];
									$ime=$row['ime'];
									$prez=$row['prezime'];
									
									$smer=$row['smer_id'];
									$smer_query=mysqli_query($mysqli,"select smer from nasoki where smer_id='$smer'")or die(mysqli_error($mysqli));
									$row_smer=mysqli_fetch_array($smer_query);
									$smers=$row_smer['smer'];
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $ind ?></td>
                                    <td><?php echo $ime; ?></td>
									<td><?php echo $prez; ?></td>
                                    <td><?php echo $smers; ?></td>
									
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Избриши" id="<?php echo $id; ?>" href="#delete_user<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_user_modal.php'); ?>
										<a  rel="tooltip"  title="Уреди" id="e<?php echo $id; ?>" href="edit_user.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
						
							

			
			</div>	
			
</body>
</html>