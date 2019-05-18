<?php include('header.php'); ?>

<?php include('dbcon.php'); ?>
<?php include('navbar.php'); ?>

<?php include('sidebar.php'); ?>
<div style="position: relative; margin: 43px 0px 0px 252px;">
    <div class="container">
		<div class="margin-top">
			<div class="row">	
								

		<div class="span12">		

		<form method="post" action="rezultati3.php">
<div class="span3">
<?php
if(isset($_POST['results'])){	
$smer_id=$_POST['selector'];
}?>
				
				<div class="control-group"> 
					<div class="controls">

								<button name="results2" class="btn btn-success"> Понатаму</button>
					</div>
				</div>
				</div>
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери тест</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Предмет</th>                                 
                                        <th>Професор</th>
										<th>Учебна Година</th>
										<th>Дата на оддржување</th>                             
                                        <th>Испит</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $rel_test_query=mysqli_query($mysqli,"select * from rel_test_smer where smer_id='$smer_id'")or die(mysql_error());
									while($row=mysqli_fetch_array($rel_test_query)){
									$id=$row['test_id']; 
									$predmet_id_query=mysqli_query($mysqli,"select * from testovi where test_id='$id'")or die(mysql_error());
									$row3=mysqli_fetch_array($predmet_id_query);
									$predmet_query=mysqli_query($mysqli,"select * from predmeti where predmet_id='".$row3['predmet_id']."'")or die(mysql_error());
									$row1=mysqli_fetch_array($predmet_query);
									$ispit_query=mysqli_query($mysqli,"select * from tip_test where ispit_id='".$row3['ispit_id']."'")or die(mysql_error());
									$row2=mysqli_fetch_array($ispit_query);
									$predmet=$row1['predmet'];
									$ispit=$row2['ispit'];
									$profesor_id=$row3['prof_id'];
									$profesori_query=mysqli_query($mysqli,"select * from profesori where prof_id='$profesor_id'")or die(mysql_error());
									$row4=mysqli_fetch_array($profesori_query);
									$profesor = $row4['ime'].' '.$row4['prezime'];
									
									$data=$row3['data'];

									?>
									
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $predmet; ?></td>
									<td><?php echo $profesor; ?></td>

                                    <td><?php echo $row3['godina']; ?></td>
									<td><?php echo $data; ?></td>

									<td><?php echo $ispit; ?></td>
									
									  
									
                                    <td width="20">
												<input class="uniform_on" name="test_id" type="checkbox" value="<?php echo $id; ?>" required/>

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
    var max= 1;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         
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