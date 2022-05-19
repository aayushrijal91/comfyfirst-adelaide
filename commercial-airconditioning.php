<?php
include __DIR__ . '/src/header.php';
$title = 'Commercial Airconditioning';
$description = 'Offering a wide range of Blocked Drains ' . $global_city . ' services. We are experts in unblocking drain treatments. Call us now on 1300 775 634 to discover more.';
$imgfolder = 'ducted';

$banner = 'Commercial Airconditioning';
$bheading = 'On-Time Guarantee or We Pay You $100!*';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

?>

<section class=" py-3 py-xxl-4 border-bottom">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center justify-content-between">
					<div class="col-auto">
						<div class="row align-items-center">
							<div class="col-md text-center">
								<p class="mb-md-0"><a href="<?= $domain ?>/services" class="btn btn-outline-danger rounded-pill text-nowrap"><i class="fal fa-long-arrow-left me-2"></i>View All Services</a></p>
							</div>
							<div class="col-md text-center">
								<p class="text-dark mb-md-0">See Full Range of Services</p>
							</div>
						</div>
					</div>
					<div class="col-auto ms-md-auto">
						<div class="row align-items-center">
							<div class="col-md text-center">
								<p class="text-dark text-nowrap mb-md-0"><b>Best Value</b> with Our HomeFirst Membership</p>
							</div>
							<div class="col-md text-center">
								<p class="mb-md-0"><a href="<?= $domain ?>/membership" class="btn btn-danger rounded-pill">See Membership</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-light py-3 py-xxl-5 whyus blocked">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">

				<div class="card mb-4 mb-xxl-5 shadow border-0 rounded-0">
					<div class="row g-0">
						<div class="col-xl-4 order-2 order-xl-1">
							<?= lazyImg("$imgfolder/cc1.jpg", randalts($alts), "br w-100 h-100") ?>
						</div>
						<div class="col-xl-8 order-1 order-xl-2">
							<div class="card-body p-xxl-5 p-4">
								<div class="row">
									<div class="col-xxl-12">
										<p class=" text-dark display-2 line-height-1 fw-bold">Commercial Airconditioning</p>
									</div>
								</div>
								<p>Fitting a commercial air conditioning system is the most cost-effective way to keep customers, visitors, and employees comfortable indoors. A vented commercial multi-split/ split system can provide healthy, pleasant air to your office, retail area, or other business premises. Different temperatures can be maintained in different zones to accommodate varying degrees of convenience and often opened doors.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-info text-white overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center">
					<div class="col-xxl-5">
						<?= lazyImg("$imgfolder/switch.png", randalts($alts), "mb-xxl-n1 ") ?>
					</div>
					<div class="col-xxl-7">
						<div class="py-3 py-xxl-5">
							<p class="display-2 fw-bold line-height-1 mb-4">Types of Commercial Air Conditioning Systems in <?= $global_city ?></p>
							<hr class="hr-h hr-white ">

							<p>Ceiling cassette systems are perfect for large open spaces like restaurants, theatres, and commercial buildings. Each one of these units is often twice as effective as traditional residential split/multi-split systems. They offer energy-saving and variable load sensing features, and temperature and movement sensor systems that shut down the device after a certain time of inactivity.</p>

							<p>Each of these devices works on the very same principle: the compressor and condensing coil are housed in the unit outdoors, which sends pressurised refrigerant to the indoor unit/s. The latter combines an evaporator coil, fan blower, and an efficient air-filtering medium, ensuring that the cooled area is supplied with pure, comfortable air.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="bg-g-primary text-white overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<div class="row align-items-center">
					<div class="col-xxl-6">
						<div class="py-3 py-xxl-5">
							<p class="display-2 fw-bold line-height-1 mb-4 me-xxl-n5">How Can Our Commercial Air Conditioning Experts Assist You?</p>
							<hr class="hr-h hr-white mb-xxl-4">
							<?php /*
							$family = [
								'Fast New Ducted System Installations'=>"We work FAST to get your new ducted air conditioning installed so you can be enjoying cool comfort as quickly as possible",
								'Free Estimates On New Ducted Systems!'=>"We make it simple to discover just how affordable a new air conditioner, fully installed, will be with our FREE ESTIMATES on new ducted systems",
							];
							foreach ($family as $key => $value) {
								?>
								<div class="d-flex mb-3 ">
									<i class="fas fa-check-circle text-danger me-2 fa-3x"></i>
									
									<div>
										<p class="font-36 font-weight-500 mb-0 line-height-1"><i><?=$key?></i></p>
										<p class="text-tlblue mb-0"> <?=$value?></p>
									</div>
									
								</div>
								<?php
							}*/
							?>

							<p>This is how we assist you in choosing and installing the best air-conditioning system for your home:</p>
							<ul>
								<li>We give you all the information you need about different manufacturers and types of commercial air conditioners. Our technicians will give then discuss your requirements.</li>
								<li>They will evaluate your property and assess the area that requires air conditioning to determine the best architecture and capacity.</li>
								<li>They will set up the air conditioners according to manufacturer standards after you have made your choice.</li>
							</ul>

							<p>As a renowned and competent business committed to offering effective services, we specialise in the maintenance, servicing, and replacements of all makes and types of commercial air conditioning systems.</p>

							<p>For the best <?= $title ?> services, please call Comfy First <?= $global_city ?> on - <?= $phone ?>. Alternatively, use this <a href="<?= $domain ?>/contact" target="_blank">Online Form</a> to send us your queries and requests. One of our team members will call you shortly.</p>
						</div>
					</div>
					<div class="col-xxl-6 align-self-end">
						<?= lazyImg("split/family.png", randalts($alts), "ps-xxl-5") ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="whyus bg-dark text-white py-3 py-xxl-5">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<div class="row">
					<?php $sctas = [
						'On-time Guaranteed' => "With ComfyFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient electricians that work around your schedule",
						$global_city . '-Wide Coverage' => 'With electrical teams across ' . $global_city . ', we can dispatch the nearest available electrician direct to your door',
						'Pay by the Job, <br class="d-none d-xxl-block">Not by the Hour' => 'With ComfyFirst you pay by the job, never the hour, meaning you know the full price BEFORE we start any work for your complete peace of mind',
						'Friendly Electricians' => "With ComfyFirst you can be so sure of on-time service that we even promise that if we're late, we'll pay you*. It's your assurance of punctual, convenient electricians that work around your schedule",
					];
					$i = 0;
					foreach ($sctas as $key => $value) {
						$i++;
					?>
						<div class="mb-4 col-lg-6 text-center">
							<div class="card rounded-0 border-0 bg-frdark h-100">
								<div class="card-boby h-100 px-xxl-5 p-4">
									<p class=" display-2 line-height-1 fw-bold"><?= $key ?></p>
									<p class="text-grey"><?= $value ?></p>
								</div>
								<?= lazyImg("blockeddrain/s$i.png", randalts($alts), "card-img w-100") ?>
							</div>
						</div>
					<?php
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="solutions bg-light py-xxl-5 py-4 font-coolvetica overflow-hidden">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xxl-9">
				<p class="text-center display-2 fw-bold line-height-1 text-dark mb-5">Everyone’s property is different.<br class="d-none d-xxl-block">
					We provide an Option Sheet that will show all available solutions in great detail</p>
				<div class="position-relative">
					<div class="row z-1 position-relative justify-content-center pt-5">
						<div class="col-xxl-5 text-center">
							<p class="display-2 fw-bold line-height-1 text-dark pt-5">Air Conditioning Solutions</p>
							<p class="h5 fw-normal"><i>We calculate ALL available options for your property</i></p>
							<?= lazyImg("home/sfp.png", randalts($alts), "mb-5", 453, 30) ?>
						</div>
					</div>
					<div class="row justify-content-center position-relative z-1 g-0">
						<?php $steps = [
							'We gather detailed information about your home to accurately assess your options',
							'We provide a highly detailed Option Sheet that lists every possible solution for your issue.',
							'We’ll confirm your decision before starting any work. Guaranteed on-time professional services',
						];
						$n = 0;
						foreach ($steps as $key => $value) {
							$n++;
						?>
							<div class="<?= ($n == 1) ? 'col-xxl-4 offset-lg-3 offset-xxl-4 col-lg-6 me-auto mb-lg-n5 position-relative z-1' : 'col-lg-6 mt-xl-n5' ?> <?= ($n == 2) ? 'me-lg-n5' : '' ?> <?= ($n == 3) ? 'ms-lg-n5' : '' ?>">
								<div class="card border-0 rounded-0 bg-transparent text-white">
									<?= lazyImg("home/st$n.png", randalts($alts), "card-img w-100") ?>
									<div class="card-img-overlay d-flex">
										<div class="row my-auto">
											<div class="<?= ($n == 1) ? 'col-6 mt-n5' : 'col-5 mt-md-5 mt-4' ?> <?= ($n == 3) ? 'offset-1' : 'offset-6' ?>">
												<div class="cta card rounded-0 border-0 mb-3 bg-transparent <?= ($n == 1) ? '' : 'ctad' ?>">
													<div class="card-body p-0 position-relative">
														<i class="fw-bold font-36 line-height-1 <?= ($n == 1) ? 'bg-dark' : 'bg-info' ?> d-inline-block py-1 ms-4 ps-2 pe-3 position-relative">Step <?= $n ?></i>
													</div>
												</div>
												<p class="h4 fw-normal line-height-1"><?= $value ?></p>
											</div>
										</div>

									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
					<?= lazyImg("home/sf.png", randalts($alts), "position-absolute top") ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>