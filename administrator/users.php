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
								
							
                                <thead>
                                    <tr>
									    <th>Индекс</th>                                 
                                        <th>Име</th>
										
                                        <th>Презиме</th>                                 
                                        <th>Насока</th> 										
                                       	
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
									
										
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
									
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
						
							

			
			</div>	
			
</body>
</html>