<?php include('header.php'); ?>
<?php include('session.php'); ?>
<html>
 <!-- Navbar -->
<?php include('navbar.php');?>

<!-- Sidebar -->
<?php include('sidebar.php');?>
	<body id="myPage">

				
				
            <div style="position: relative; margin: 43px 0px 0px 222px;">
			<div class="span12" >	
			  <!--background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4)-->

						<div class="title">
	                     <h3>Листа од професори</h3>
						</div>
						
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
								
								<p><a href="add_prof.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Додади Професор</a></p>
							
                                <thead>
                                    <tr>
									    <th>Име</th>                                 
                                        <th>Презиме</th>
										
                                        <th>Корисничко име</th>                                 
                                        <th>Лозинка</th> 										
                                        
										
										<th class="action">Избриши/Измени</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									
										
								  $user_query=mysqli_query($mysqli,"select * from profesori")or die(mysqli_error($mysqli));
								  
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['prof_id'];  
									$ime=$row['ime'];
									$prezime=$row['prezime'];
									$username=$row['username'];
									$pass=$row['pass'];
									
									
									
									
									
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $ime; ?></td>
                                    <td><?php echo $prezime; ?></td>
									<td><?php echo $username; ?></td>
                                    <td><?php echo $pass; ?></td>
									
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Избриши" id="<?php echo $id; ?>" href="#delete_prof<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_prof_modal.php'); ?>
										<a  rel="tooltip"  title="Уреди" id="e<?php echo $id; ?>" href="edit_prof.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>	
</div>	
</body>		
	</html>		
