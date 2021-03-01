<div class="container-fluid">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 xol-xl-6">
			<h1><?php echo _('Account Information'); ?></h1>
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 xol-xl-6">
						<div class="input-control">
							<label for="firstName"><?php echo _('First Name'); ?></label>
							<input type="text" name="firstName" id="firstName" value="">
						</div>
						
						<div class="input-control">
							<label for="lastName"><?php echo _('Last Name'); ?></label>
							<input type="text" name="lastName" id="lastName" value="">
						</div>
						
						<div class="input-control">
							<label for="socialSignup"><?php echo _('Or Sign Up With Social'); ?></label>
							<button type="submit" name="socialSignup" id="socialSignup" class="socialSignup">F</button>
							<button type="submit" name="socialSignup" class="socialSignup">G</button>
						</div>
						
						<div class="input-control">
							<label for="password"><?php echo _('Password'); ?></label>
							<input type="text" name="password" id="password" value="">
						</div>
						
						<div class="input-control">
							<label for="rpassword"><?php echo _('Repeat Password'); ?></label>
							<input type="text" name="rpassword" id="rpassword" value="">
						</div>
					</div>
					
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 xol-xl-6">
						<div class="input-control">
							<label for="email"><?php echo _('Email Address'); ?></label>
							<input type="email" name="email" id="email" value="">
						</div>
						
						<div class="input-control">
							<label for="organization"><?php echo _('Full Name Of Organization'); ?></label>
							<input type="text" name="organization" id="organization" value="">
							<span class="pg-optional"><?php echo _('Optional'); ?></span>
						</div>
						
						<div class="input-control">
							<label for="position"><?php echo _('Position Held In Organization'); ?></label>
							<input type="text" name="position" id="position" value="">
							<span class="pg-optional"><?php echo _('Optional'); ?></span>
						</div>
						
						<div class="input-control">
							<label for="country"><?php echo _('Country'); ?></label>
							<input type="text" name="country" id="country" value="">
						</div>
						
						<div class="input-control">
							<label for="postcode"><?php echo _('Post Code'); ?></label>
							<input type="text" name="postcode" id="postcode" value="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 xol-xl-6">
			<h1><?php echo _('Billing Information'); ?></h1>
			
			
		</div>
	</div>
</div>