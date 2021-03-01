<?php

$sign_up_error = '';
$jsScript = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['select_package'])) {
		
		if (isset($_POST['package']) && filter_var($_POST['package'], FILTER_VALIDATE_INT) && $_POST['package'] > 0 && $_POST['package'] < 5) {
			$_SESSION['package'] = $_POST['package'];
			$jsScript = '<script>window.location.href = "/sign_up?step=2";</script>';
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
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/light-green-leaf.png" />
			<span><?php echo _('Select Package Type'); ?></span>
			<h4 style="color: #fff;">1</h4>
		</div>
		
		<div class="col">
			<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/green-leaf.png" />
			<span class="now-selected"><?php echo _('Choose Your Package'); ?></span>
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
	
	<div class="row mt-5 mb-5">
		<div class="col text-center">
			<h3><?php echo _('Individual Packages'); ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-8 mx-auto">
			
			<form method="post" action="">
				<div class="row mt-5">
					<div class="col">
						<label class="individual-table text-center individualSilver" for="individualSilver">
							<span style="background-color: #C3E95F;"><?php echo _('Silver'); ?></span>
							
							<table>
								<tr>
									<td class="fw-bold" style="padding-top: 2.2vw; font-size: 1.3vw;">£5 / month</td>
								</tr>
								
								<tr>
									<td>Great for the average <br/>UK person</td>
								</tr>
								
								<tr>
									<td>14 Trees Planted  every month</td>
								</tr>
								
								<tr>
									<td>50p/month to a good cause</td>
								</tr>
								
								<tr>
									<td>1 Footprint*</td>
								</tr>
								
								<tr>
									<td>1 Footpri+ 7500 car miles or 3 short-haul flights nt*</td>
								</tr>
							</table>
							
							<input type="radio" name="individual_package" id="individualSilver" value="1">
						</label>
					</div>

					<div class="col">
						<label class="individual-table text-center individualGold" for="individualGold">
							<span style="background-color: #72BF44;"><?php echo _('Gold'); ?></span>
							
							<table>
								<tr>
									<td class="fw-bold" style="padding-top: 2.2vw; font-size: 1.3vw;">£10 / month</td>
								</tr>
								
								<tr>
									<td>For those who fly and travel <br/>more than average</td>
								</tr>
								
								<tr>
									<td>28 Trees Planted  every month</td>
								</tr>
								
								<tr>
									<td>£1/month to a good cause</td>
								</tr>
								
								<tr>
									<td>2 Footprints*</td>
								</tr>
								
								<tr>
									<td>+ 35,000 car miles or 12 short haul or 4 long-haul flights</td>
								</tr>
							</table>
							
							<input type="radio" name="individual_package" id="individualGold" value="2">
						</label>
					</div>

					<div class="col">
						<label class="individual-table text-center individualPlatinum" for="individualPlatinum">
							<span style="background-color: #367D3C; color: #fff;"><?php echo _('Platinum'); ?></span>
							
							<table>
								<tr>
									<td class="fw-bold" style="padding-top: 2.2vw; font-size: 1.3vw;">£15 / month</td>
								</tr>
								
								<tr>
									<td>For those that want to do more or <br/>are frequent flyers.</td>
								</tr>
								
								<tr>
									<td>42 Trees Planted  every month</td>
								</tr>
								
								<tr>
									<td>£1/month to a good cause</td>
								</tr>
								
								<tr>
									<td>3 Footprints*</td>
								</tr>
								
								<tr>
									<td>+100,000 car miles or 34 short-haul or 12 long-haul flights</td>
								</tr>
							</table>
							
							<input type="radio" name="individual_package" id="individualPlatinum" value="3">
						</label>
					</div>
				</div>
				
				<div class="row mt-5 back-next">
					<div class="col">
						<a href="/sign-up?step=1"><?php echo _('Back'); ?></a>
					</div>
					
					<div class="col">
						<button type="submit" name="select_individual_package"><?php echo _('Next'); ?></button>
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