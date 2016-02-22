<!DOCTYPE hmtl>
<html>
	<head>
		
	</head>
	<body>
		<?php
			echo validation_errors('<p style ="color : red;" >' , '</p>');
		?>
		<!--?php 
			
			echo form_open('index.php/users/submit');
			
			echo "Username";
			echo form_input('username', '');
			echo "<br>";
			echo "Password";
			echo form_password('pword', '');
			echo "<br>";
			
			echo form_submit('submit', 'Submit');
			echo form_submit('submit', 'New User');
			echo form_close();
		?-->
		
		
				<form class="form-vertical" method = "post" action = "<?php base_url(); ?>submit">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">
							<?php 
                                                            foreach($credentials->result() as $row){
                                                                
                                                            
                                                    ?>
                                                        <div class="control-group">
								<div class="controls row-fluid">
                                                                    <input class="span12" type="text" id="inputEmail" name = "username" placeholder="Username" value ="<?php echo $row->userName; ?>"  required>
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
                                                                    <input class="span12" type="password" id="inputPassword" name = "pword" placeholder="Password" value = "<?php echo $row->userPassword;  ?>" value ="select" required>
								</div>
							</div>
                                                          <?php   }
                                                        ?>   
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div>
					</form>
		<?php		
			
		?>
		
	</body>
</html>