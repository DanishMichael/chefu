<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div id="contactus">
			<h1>Chef Sign Up</h1>
			<hr>
			<form role="form" method="post" action="<?php echo base_url();?>Chef/form_validate" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your First Name" name="firstname" value="<?php echo set_value('firstname'); ?>"  >
					<?php echo form_error('firstname', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Last Name" name="lastname" value="<?php echo set_value('lastname'); ?>">
					<?php echo form_error('lastname', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Your Email" name="email" value="<?php echo set_value('email'); ?>">
					<?php echo form_error('email', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Select Password" name="password" value="<?php echo set_value('email'); ?>">
					<?php echo form_error('password', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				
				
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Phone" name="phone" value="<?php echo set_value('phone'); ?>">
					<?php echo form_error('phone', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Street Address" name="address" value="<?php echo set_value('address'); ?>" >
					<?php echo form_error('address', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				<div class="form-group">
					<select class="form-control" name="country"> 
					    <option value = "1">Pakistan</option>
					    <option value = "2">China</option>
					    <option value = "3">Australia</option>
					</select
					<?php echo form_error('country', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				
				<div class="form-group">
					<select class="form-control" name="city"> 
					    <option value = "1">Lahore</option>
					    <option value = "2">Karachi</option>
					    <option value = "3">Islamabad</option>
					</select
					<?php echo form_error('city', '<div class="alert alert-danger contact-warning">', '</div>'); ?>
				</div>
				<div class="form-group">
					<input type="file" class="form-control" placeholder="Profile Picture" name="userfile">
					<?php 
					    if(isset($error)){ ?>
					        <p><?php echo $error; ?></p>
					  <?php  }
					?>
				</div>
				<hr>
				<div class="form-group">
					<button type="reset" class="btn btn-danger">Clear Form</button>
					<button type="submit" class="btn btn-success">Send Message</button>
				</div>
			</form>
		</div>
	</div>
</div>
