<?php

$sign_up_error = '';
$jsScript = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['select_package'])) {
		
		if (isset($_POST['package']) && filter_var($_POST['package'], FILTER_VALIDATE_INT) && $_POST['package'] > 0 && $_POST['package'] < 5) {
			$_SESSION['sign_up_package'] = array('package' => $_POST['package']);
			$jsScript = '<script>location.replace("/sign-up?step=2");</script>';
		} else {
			$sign_up_error = _('Error! Please select a package');
		}
		
	}
}

echo $jsScript;
?>

<div class="container-fluid pg-sign-up">
	
	<div class="row pg-sign-up-steps mb-5">
		<div class="line"></div>
		
		<div class="col">
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/green-leaf.png" />
			<span class="now-selected"><?php echo _('Select Package Type'); ?></span>
			<h4>1</h4>
		</div>
		
		<div class="col">
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/transparent-leaf.png" />
			<span><?php echo _('Choose Your Package'); ?></span>
			<h4>2</h4>
		</div>
		
		<div class="col">
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/transparent-leaf.png" />
			<span><?php echo _('Choose Your Good Cause'); ?></span>
			<h4>3</h4>
		</div>
		
		<div class="col">
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/transparent-leaf.png" />
			<span><?php echo _('Personal info'); ?></span>
			<h4>4</h4>
		</div>
		
		<div class="col">
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/transparent-leaf.png" />
			<span><?php echo _('Make Account &amp; Payment'); ?></span>
			<h4>5</h4>
		</div>
	</div>
	
	<div class="row mt-5">
		<div class="col text-center">
			<h3><?php echo _('Plant trees, counterbalance carbon'); ?></h3>
			<h3 style="color: #367D3C;"><?php echo _('and support a great cause'); ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-8 mx-auto">
			
			<form method="post" action="">
				<div class="row mt-5">
					<div class="col">
						<label class="package-tile text-center packageIndividual" for="packageIndividual">
							<h2><?php echo _('Individual'); ?></h2>
							<input type="radio" name="package" id="packageIndividual" value="1">
						</label>
					</div>

					<div class="col">
						<label class="package-tile text-center packageFamily" for="packageFamily">
							<h2><?php echo _('Family'); ?></h2>
							<input type="radio" name="package" id="packageFamily" value="2">
						</label>
					</div>

					<div class="col">
						<label class="package-tile text-center packageBusiness" for="packageBusiness">
							<h2><?php echo _('Business'); ?></h2>
							<input type="radio" name="package" id="packageBusiness" value="3">
						</label>
					</div>

					<div class="col">
						<label class="package-tile text-start packageNoSubscription" for="packageNoSubscription">
							<h2><?php echo _('No <br/>Subscription'); ?></h2>
							<p><?php echo _('Ideal for Sports <br/>& Education'); ?></p>
							<input type="radio" name="package" id="packageNoSubscription" value="4">
						</label>
					</div>
				</div>
				
				<div class="row mt-5 back-next">
					<div class="col">
						<a href="/"><?php echo _('Back'); ?></a>
					</div>
					
					<div class="col">
						<button type="submit" name="select_package"><?php echo _('Next'); ?></button>
					</div>
				</div>
				
				<div class="row mt-4">
					<div class="col">
						<p class="sign-up-error"><?php echo $sign_up_error; ?></p>
					</div>
				</div>
			</form>
			
		</div>
	</div>
	
</div>