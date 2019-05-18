<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar.php'); ?>

<?php include('sidebar.php'); ?>
<div style="position: relative; margin: 43px 0px 0px 252px;">
    <div class="container">
		<div class="margin-top">
			<div class="row">	
								

		<div class="span12" style="margin-left: 60px;">		

		<form method="post" action="add_test3.php">
				<div class="control-group"> 
				<div class="control-group"> 
					<div class="controls">
						<button name="delete_student" class="btn btn-success"><i class="icon-save icon-large"></i> Зачувај</button>
					</div>
				</div>
				</div>
				
				<div class="control-group">
				<label class="control-label" >Насока</label>
				<div class="controls">
				<select name="ispit_id" class="chzn-select" required/>
				<option></option>
				<?php $result =  mysqli_query($mysqli,"select * from tip_test")or die(mysql_error()); 
				while ($row=mysqli_fetch_array($result)){ ?>
				<option value="<?php echo $row['ispit_id']; ?>"><?php echo $row['ispit']; ?></option>
				<?php } ?>
				</select>
				</div>
				</div>
			
				<div class="control-group">
				<label class="control-label" >Дата на оддржување: </label>
				<div class="controls">
				<input  class="" name="ispit_data" type="date" required/>
				</div>
				</div>
					
				<div class="control-group">
				<label class="control-label" >??? ??? ???: </label>
				<div class="controls">
				<input  class="" name="format" type="radio" value="0"  checked> Поени
				<input  class="" name="format" type="radio" value="1" /> Оцени
				<input  class="" name="format" type="radio" value="2" /> Поени и оцени

				</div>
				</div>
				
				<br>
				<div class="span8">
						<div class="alert alert-success"><strong>Одбери предмети</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                       
                                        <th>Предмет</th>                                 
                                        <th>Семестар</th>                                 
                                        
										
                                    </tr>
                                </thead>
                                <tbody>
								 
                                 
				<?php 
					$result_query =  mysqli_query($mysqli,"select * from rel_prof_pred where prof_id='$session_id'")or die(mysql_error());
					while($row=mysqli_fetch_array($result_query)){
					$predmet_id=$row['predmet_id'];
					
					$predmeti_query =  mysqli_query($mysqli,"select * from predmeti where predmet_id='$predmet_id'")or die(mysql_error());
					$row1=mysqli_fetch_array($predmeti_query);
					
					$predmet=$row1['predmet'];	
					$semestar=$row1['semestar'];
				
				
				
				?>
									
									<tr class="del<?php echo $predmet_id; ?>">
									
									                              
                                    <td><?php echo $predmet; ?></td>
                                    <td><?php echo $semestar; ?></td>
									
									  
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td width="20">
												<input  class="uniform_on" name="selector" type="checkbox" value="<?php echo $predmet_id; ?>" required/>
												
                                    </td>
									
                                    </tr>
									<?php  

				}?>
                                </tbody>
                            </table>
				</div>		
			   </form>
			
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
	</div>