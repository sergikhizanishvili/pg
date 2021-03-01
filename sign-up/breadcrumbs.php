<?php

$breadcrumbs = array(
	'steps' => array(
		1 => array(
			'step' => 1,
			'title' => _('Select Package Type'),
		),
		2 => array(
			'step' => 2,
			'title' => _('Choose Your Package'),
		),
		3 => array(
			'step' => 3,
			'title' => _('Choose Your Good Cause'),
		),
		4 => array(
			'step' => 4,
			'title' => _('Personal info'),
		),
		5 => array(
			'step' => 5,
			'title' => _('Make Account & Payment'),
		)		
	),
	'misc' => array(
		'pgsbia' => 'https://pg3.sweb.ge/wp-content/uploads/2021/02/green-leaf.png',
		'pgsbip' => 'https://pg3.sweb.ge/wp-content/uploads/2021/02/light-green-leaf.png',
		'pgsbi' => 'https://pg3.sweb.ge/wp-content/uploads/2021/02/transparent-leaf.png',
		'pgsbin' => 'pg-sbin',
		'pgsbinp' => 'pg-sbinp',
		'pgbta' => 'pg-fs-20 pg-sbta',
		'pgbt' => 'pg-fs-14 pg-sbt',
		'pbbc' => 'd-none d-xl-block col-xl pg-sb',
		'pgbca' => 'col-12 col-sm-12 xol-md-12 col-lg-12 col-xl pg-sb'
	)
);




?>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-11">
			<div class="row">
				<?php foreach ($breadcrumbs['steps'] as $key => $breadcrumb) { ?>
					
				<div class="<?php echo ($key == $pgscp) ? $breadcrumbs['misc']['pgbca'] : $breadcrumbs['misc']['pbbc']; ?>">
					<img src="<?php if ($key < $pgscp) { echo $breadcrumbs['misc']['pgbip']; } elseif ($key == $pgscp) { echo $breadcrumbs['misc']['pgbia']; } else { echo $breadcrumbs['misc']['pgbi']; } ?>" />
					<span class="<?php echo ($key < $pgscp) ? $breadcrumbs['misc']['pgbinp'] : $breadcrumbs['misc']['pgbin']; ?>"><?php echo $breadcrumb['step']; ?></span>
					<span
				</div>
				
				<?php } ?>
				
				<div class="col-12 col-sm-12 xol-md-12 col-lg-12 col-xl">
					
				</div>
			</div>
		</div>
		
		<div class="d-none d-xl-block col-xl-1">
			
		</div>
	</div>
</div>