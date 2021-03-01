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
			<h3><?php echo _('Family Packages'); ?></h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col-8 mx-auto">
			
			<form method="post" action="">
				<div class="row mt-5">
					<div class="col family-packages">
						<div class="dropdown pg-select family-adults text-center">
							<button type="button" data-bs-toggle="dropdown"><span>No. Of Adults</span> &nbsp; <i aria-hidden="true" class="fas fa-chevron-down"></i></button>
							<div class="dropdown-menu">
								<ul class="sign-up-select">
									<li><span data-value="0">0</span></li>
									<li><span data-value="1">1</span></li>
									<li><span data-value="2">2</span></li>
									<li><span data-value="3">3</span></li>
									<li><span data-value="4">4</span></li>
									<li><span data-value="5">5</span></li>
									<li><span data-value="6">6</span></li>
									<li><span data-value="7">7</span></li>
									<li><span data-value="8">8</span></li>
								</ul>
							</div>
						</div>
						
						<h3 class="my-4 text-center">£5 per Adult</h3>
					</div>
					
					<div class="col family-packages">
						<div class="dropdown pg-select family-kids text-center">
							<button type="button" data-bs-toggle="dropdown"><span>No. Of Kids</span> &nbsp; <i aria-hidden="true" class="fas fa-chevron-down"></i></button>
							<div class="dropdown-menu">
								<ul class="sign-up-select">
									<li><span data-value="0">0</span></li>
									<li><span data-value="1">1</span></li>
									<li><span data-value="2">2</span></li>
									<li><span data-value="3">3</span></li>
									<li><span data-value="4">4</span></li>
									<li><span data-value="5">5</span></li>
									<li><span data-value="6">6</span></li>
									<li><span data-value="7">7</span></li>
									<li><span data-value="8">8</span></li>
								</ul>
							</div>
						</div>
						
						<h3 class="my-4 text-center">£2.5 per Child</h3>
					</div>
					
					<div class="col family-packages">
						<div class="dropdown pg-select family-pets text-center">
							<button type="button" data-bs-toggle="dropdown"><span>No. Of Pets</span> &nbsp; <i aria-hidden="true" class="fas fa-chevron-down"></i></button>
							<div class="dropdown-menu">
								<ul class="sign-up-select">
									<li><span data-value="0">0</span></li>
									<li><span data-value="1">1</span></li>
									<li><span data-value="2">2</span></li>
									<li><span data-value="3">3</span></li>
									<li><span data-value="4">4</span></li>
									<li><span data-value="5">5</span></li>
									<li><span data-value="6">6</span></li>
									<li><span data-value="7">7</span></li>
									<li><span data-value="8">8</span></li>
								</ul>
							</div>
						</div>
						
						<h3 class="my-4 text-center">£1.25 per Pet</h3>
					</div>
					
					<input type="hidden" name="familyAdults" id="familyAdults" value="0">
					<input type="hidden" name="familyKids" id="familyKids" value="0">
					<input type="hidden" name="familyPets" id="familyPets" value="0">
				</div>
				
				<div class="row totals-table mt-5 mb-4">
					<table>
						<tr>
							<td colspan="3">
								<h3 class="text-center">Your Family Impact</h3>
							</td>
						</tr>
						
						<tr>
							<td class="text-center">
								<h2 id="treesPlanted">0</h2>
								<h2>Trees Planted</h2>
								<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/impact-1.jpg" />
							</td>
							
							<td class="text-center">
								<h2 id="footPrintsBalanced">0</h2>
								<h2>Footprints Balanced</h2>
								<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/impact-2.jpg" />
							</td>
							
							<td class="text-center">
								<h2 id="toGoodCauses">0</h2>
								<h2>To Good Causes</h2>
								<img src="https://pg.sweb.ge/wp-content/uploads/2021/02/impact-3.jpg" />
							</td>
						</tr>
					</table>
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