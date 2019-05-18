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

		<form method="post" action="test_smer2.php">
<div class="span3">

				
				<div class="control-group"> 
					<div class="controls">

								<button name="delete_student" class="btn btn-success"><i class="icon-plus-sign icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери тест</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Предмет</th>                                 
                                        <th>Година</th>                                 
                                        <th>Испит</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $test_query=mysqli_query($mysqli,"select * from testovi")or die(mysql_error());
									while($row=mysqli_fetch_array($test_query)){
									$id=$row['test_id']; 
									
									$predmet=mysqli_query($mysqli,"select predmet from predmeti where predmet_id='".$row['predmet_id']."'")or die(mysql_error();
									$ispit=mysqli_query($mysqli,"select ispit from ispiti where ispit_id='".$row['ispit_id']."'")or die(mysql_error();
									?>
									
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $predmet; ?></td>
                                    <td><?php echo $row['godina']; ?></td>
									<td><?php echo $ispit; ?></td>
									
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>" >
												
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