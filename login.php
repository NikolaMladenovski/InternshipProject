<?php 
include('header.php');
include('navbar_login_login.php');
 include('dbcon.php');?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
				
				<div class="login"  style="background-color:#f0f0f0;">
				<div class="log_txt " style="background-color: rgb(0,0,0);">
				<p><strong>Внеси податоци</strong></p>
				</div>	
				<div class="">
						<form class="form-horizontal" action="loginpom.php" method="POST" style=" color:black;">
								<div class="control-group ">
									<label class="control-label" for="inputEmail">Корисничко име</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Лозинка</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password">
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Логирај се</button>
								</div>
								</div>
								
	
	
						</form>
				</div>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<div style="position: fixed; bottom: 0%; width:100%;">
</div>						