<?php include('header.php'); ?>

<?php include('dbcon.php'); ?>
<html>
<?php include('navbar.php'); ?>
<?php include('sidebar.php'); ?>

<?php
if(isset($_POST['results2'])){	
$test_id=$_POST['test_id'];
				
				
}	
?>				

<body id="myPage">



<div style="position: relative; margin: 43px 0px 0px 252px;">    
    <div class="container">
		<div class="margin-top">
			<div class="row">	
								

		<div class="span12">		 

				
				<div class="span8">
						<?php
							$testovi_query=mysqli_query($mysqli,"select * from testovi where test_id='$test_id'")or die(mysql_error());
							$row1=mysqli_fetch_array($testovi_query);
							$data = $row1['data'];
							$predmet_id = $row1['predmet_id'];
							$test_id=$row1['test_id'];
							$format=$row1['format']; //dali testot ima oceni, poeni, ili i dvete
							
							$predmeti_query=mysqli_query($mysqli,"select * from predmeti where predmet_id='$predmet_id'")or die(mysql_error());
							$row2=mysqli_fetch_array($predmeti_query);
							$predmet = $row2['predmet'];

						
						?>
						<div class="alert alert-success"><strong>Резултати</strong></div> 
						<div class="title">
						<h3>Резултати од испитот <?php echo $predmet;?> <br> (одржан на <?php echo $data;?>) </h3>
						</div>
							<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >

							<div class="pull-right">
								<a onclick="window.print()" class="btn btn-info"><i class="icon-print icon-large"></i> Печати</a>
							</div>
							

                                <thead>
                                    <tr>
                                        <th>Индекс</th>
										<?php
										if($format==0 || $format==2)
											echo"<th>Поени</th>";
										?>
										<?php
										if($format==1 || $format==2)
											echo"<th>Оцена</th>";
										?>
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 
								    $rel_query=mysqli_query($mysqli,"select * from rel_stu_test where test_id='$test_id'")or die(mysql_error());
									while($row1=mysqli_fetch_array($rel_query)){
										$pom1=$row1['student_id'];
										
										$poeni =$row1['poeni'];
										$ocena=$row1['ocena']; //ocenata koja shto ja dobil studentot na testot
								    $student_query=mysqli_query($mysqli,"select *  from studenti where student_id='$pom1' ")or die(mysql_error());
									$row2=mysqli_fetch_array($student_query);
									$id=$row2['student_id']; 
									$indeks=$row2['indeks'];
									?>
									
									<tr class="del<?php echo $id ?>">
									<td><?php echo $indeks; ?></td>

									<?php
									
									if($format==0 || $format==2)
 										echo"
										<td>".$poeni."</td>";
									
									if($format==1 || $format==2)
										echo"
										<td>".$ocena."</td>";
									?>
									</tr>
									<?php  

									}?>
                                </tbody>
                            </table>
							
			</div>	 
			</div>		

			</div>
		</div>
    </div>
	</div> 
</body>
</html>