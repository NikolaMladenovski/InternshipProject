<?php include('header.php'); ?>

<?php include('dbcon.php'); ?>
<?php include('navbar.php'); ?>
<?php include('sidebar.php'); ?>

<div style="position: relative; margin: 43px 0px 0px 252px;">
    <div class="container">
		<div class="margin-top">
			<div class="row">	
								

		<div class="span12">
		

		<form method="post" action="rezultati2.php">
<div class="span3">

											<div class="control-group">
				
				
				
				<div class="control-group"> 
					<div class="controls">

								<button name="results" class="btn btn-success">Понатаму</button>
					</div>
				</div>
				</div>
				
			
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
                                    
									
									  
									
                                    <td width="20">
												<input  class="uniform_on" name="selector" type="checkbox" value="<?php echo $pom; ?>" required/>
												
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
    var max=1;
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
	