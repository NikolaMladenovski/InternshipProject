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
		

		<form method="post" action="test_smer3.php">
<div class="span3">

											<div class="control-group">
				
				
				
				<div class="control-group"> 
					<div class="controls">

								<button name="delete_s" class="btn btn-success"><i class="icon-save icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				<?php
if(isset($_POST['delete_student'])){	
$test_id=$_POST['tests'];?>
				<input type="hidden" name="testpom" value="<?php echo $test_id?>">
				<?php
}	
?>
				
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери Смер</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Смер</th>                                 
                                                                        
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  
				
				<?php $result_query =  mysqli_query($mysqli,"select * from nasoki")or die(mysql_error());
				while($row=mysqli_fetch_array($result_query)){
				$pom=$row['smer_id'];	
			    $ime=$row['smer'];
				 ?>
									
									<tr class="del<?php echo $pom ?>">
									
									                              
                                    <td><?php echo $ime; ?></td>
                                    
									
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input  class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $pom; ?>" >
												
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
    var max=7;
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
	
	
