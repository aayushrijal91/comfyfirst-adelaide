<?php
$title = 'Serviced Areas';
$description = '';
include __DIR__ . '/src/header.php';
$imgfolder = 'areas';

$banner = 'Proudly Servicing <br class="d-one d-xxl-block">All of ' . $global_city;
$bheading = 'Find the ComfyFirst team nearest to you!';
$bch = 'Pricing by the job, not by the hour';
$bcc = 'No matter how long the job ends up taking us, you still pay the same price';

include __DIR__ . '/src/banner.php';

$areas = [
	'Adelaide' => [
		"Aberfoyle Park", "Adelaide Airport", "Albert Park", "Alberton", "Aldinga", "Aldinga Beach", "Allenby Gardens", "Andrews Farm", "Angle Park", "Angle Vale", "Ascot Park", "Ashford", "Athelstone", "Athol Park", "Auldana", "Banksia Park", "Beaumont", "Bedford Park", "Belair", "Bellevue Heights", "Beulah Park", "Beverley", "Bibaringa", "Bibaringa", "Birkenhead", "Black Forest", "Blackwood", "Blair Athol", "Blakeview", "Blewitt Springs", "Bolivar", "Bowden", "Brahma Lodge", "Brighton", "Broadview", "Broadview", "Brompton", "Brooklyn Park", "Brown Hill Creek", "Buckland Park", "Burnside", "Burton", "Camden Park", "Campbelltown", "Cavan", "Chandlers Hill", "Cheltenham", "Cherry Gardens", "Christie Downs", "Christies Beach", "Clapham", "Clarence Gardens", "Clarence Park", "Clarendon", "Clearview", "Clovelly Park", "College Park", "Collinswood", "Colonel Light Gardens", "Coromandel East", "Coromandel Valley", "Coromandel Valley", "Cowandilla", "Crafers West", "Craigburn Farm", "Craigmore", "Croydon", "Croydon Park", "Cumberland Park", "Darlington", "Darlington", "Davoren Park", "Daw Park", "Dernancourt", "Dernancourt", "Devon Park", "Devon Park", "Direk", "Dorset Vale", "Dover Gardens", "Dry Creek", "Dry Creek", "Dudley Park", "Dulwich", "Eastwood", "Eden Hills", "Edinburgh", "Edinburgh North", "Edwardstown", "Elizabeth", "Elizabeth Downs", "Elizabeth East", "Elizabeth Grove", "Elizabeth North", "Elizabeth Park", "Elizabeth South", "Elizabeth Vale", "Elizabeth Vale", "Enfield", "Erindale", "Ethelton", "Evandale", "Evanston", "Evanston Gardens", "Evanston Park", "Evanston Park", "Evanston South", "Everard Park", "Exeter", "Fairview Park", "Felixstow", "Ferryden Park", "Findon", "Firle", "Fitzroy", "Flagstaff Hill", "Flinders Park", "Forestville", "Frewville", "Fulham", "Fulham Gardens", "Fullarton", "Gawler", "Gawler East", "Gawler South", "Gawler West", "Gepps Cross", "Gilberton", "Gilles Plains", "Gilles Plains", "Gillman", "Glandore", "Glandore", "Glanville", "Glen Osmond", "Glenalta", "Glenelg", "Glenelg", "Glenelg East", "Glenelg North", "Glenelg North", "Glenelg South", "Glengowrie", "Glenside", "Glenunga", "Globe Derby Park", "Glynde", "Golden Grove", "Goodwood", "Gould Creek", "Gould Creek", "Grange", "Green Fields", "Greenacres", "Greenwith", "Gulfview Heights", "Gulfview Heights", "Hackham", "Hackham West", "Hackney", "Hallett Cove", "Hampstead Gardens", "Happy Valley", "Hawthorn", "Hawthorndene", "Hazelwood Park", "Heathpool", "Hectorville", "Hendon", "Henley Beach", "Henley Beach South", "Highbury", "Highgate", "Hillbank", "Hillcrest", "Hillier", "Hillier", "Hilton", "Hindmarsh", "Holden Hill", "Holden Hill", "Hope Valley", "Houghton", "Hove", "Humbug Scrub", "Huntfield Heights", "Hyde Park", "Ingle Farm", "Ironbank", "Joslin", "Kangarilla", "Kensington", "Kensington Gardens", "Kensington Park", "Kent Town", "Keswick", "Keswick Terminal", "Kidman Park", "Kilburn", "Kilkenny", "Kings Park", "Kingston Park", "Kingswood", "Klemzig", "Kudla", "Kurralta Park", "Largs Bay", "Largs North", "Leabrook", "Leawood Gardens", "Leawood Gardens", "Lightsview", "Linden Park", "Lockleys", "Lonsdale", "Lower Mitcham", "Lynton", "MacDonald Park", "Magill", "Magill", "Malvern", "Manningham", "Mansfield Park", "Marden", "Marino", "Marion", "Marleston", "Marryatville", "Maslin Beach", "Mawson Lakes", "Maylands", "McLaren Flat", "McLaren Vale", "Medindie", "Medindie Gardens", "Melrose Park", "Mile End", "Mile End South", "Millswood", "Mitcham", "Mitchell Park", "Moana", "Modbury", "Modbury Heights", "Modbury North", "Morphett Vale", "Morphettville", "Mount Osmond", "Munno Para", "Munno Para Downs", "Munno Para West", "Myrtle Bank", "Nailsworth", "Netherby", "Netley", "Newton", "Noarlunga Centre", "Noarlunga Downs", "North Adelaide", "North Brighton", "North Haven", "North Plympton", "Northfield", "Northgate", "Norwood", "Novar Gardens", "O'Halloran Hill", "O'Halloran Hill", "O'Sullivan Beach", "Oakden", "Oaklands Park", "Old Noarlunga", "Old Reynella", "One Tree Hill", "Onkaparinga Hills", "Osborne", "Ottoway", "Outer Harbor", "Ovingham", "Ovingham", "Panorama", "Para Hills", "Para Hills", "Para Hills West", "Para Vista", "Paradise", "Parafield", "Parafield Gardens", "Paralowie", "Park Holme", "Parkside", "Pasadena", "Payneham", "Payneham South", "Penfield", "Penfield Gardens", "Pennington", "Peterhead", "Plympton", "Plympton Park", "Pooraka", "Port Adelaide", "Port Noarlunga", "Port Noarlunga South", "Port Willunga", "Prospect", "Queenstown", "Redwood Park", "Regency Park", "Renown Park", "Reynella", "Reynella East", "Richmond", "Ridgehaven", "Ridleyton", "Rose Park", "Rosewater", "Rosewater", "Rosslyn Park", "Rostrevor", "Royal Park", "Royston Park", "Salisbury", "Salisbury Downs", "Salisbury East", "Salisbury Heights", "Salisbury Heights", "Salisbury North", "Salisbury Park", "Salisbury Plain", "Salisbury South", "Sampson Flat", "Seacliff", "Seacliff Park", "Seacliff Park", "Seacombe Gardens", "Seacombe Heights", "Seaford", "Seaford Heights", "Seaford Meadows", "Seaford Rise", "Seaton", "Seaview Downs", "Sefton Park", "Sefton Park", "Sellicks Beach", "Sellicks Hill", "Semaphore", "Semaphore Park", "Semaphore South", "Sheidow Park", "Skye", "Smithfield", "Smithfield Plains", "Somerton Park", "South Brighton", "South Plympton", "Springfield", "St Agnes", "St Georges", "St Kilda", "St Marys", "St Morris", "St Peters", "Stepney", "Stirling", "Stonyfell", "Sturt", "Surrey Downs", "Taperoo", "Tatachilla", "Tea Tree Gully", "Tennyson", "The Range", "Thebarton", "Thorngate", "Toorak Gardens", "Torrens Park", "Torrensville", "Tranmere", "Trinity Gardens", "Trott Park", "Tusmore", "Uleybury", "Underdale", "Unley", "Unley Park", "Upper Hermitage", "Upper Sturt", "Urrbrae", "Vale Park", "Valley View", "Valley View", "Valley View", "Virginia", "Vista", "Walkerville", "Walkley Heights", "Walkley Heights", "Warradale", "Waterfall Gully", "Waterloo Corner", "Waterloo Corner", "Wattle Park", "Wayville", "Welland", "West Beach", "West Beach", "West Croydon", "West Hindmarsh", "West Lakes", "West Lakes Shore", "West Richmond", "Westbourne Park", "Whites Valley", "Willaston", "Willunga", "Willunga South", "Windsor Gardens", "Wingfield", "Woodcroft", "Woodville", "Woodville Gardens", "Woodville North", "Woodville Park", "Woodville South", "Woodville West", "Wynn Vale", "Yatala Vale", "Yattalunga"
	],
];
?>

<section class="bg-light py-3 py-xxl-5 text-dark">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9 text-center">
				<p class="h4 mb-0 fw-normal">ComfyFirst provides rapid, on-time service for all your electrical, hot water and drain needs across the entire <?= $global_city ?> metropolitan area 24 hours, 7 days. You can read about our commitment to great service <u class="fw-bold">here</u>, and from our other happy ComfyFirst customers <u class="fw-bold">here</u></p>
			</div>
		</div>
	</div>
</section>

<section class="py-3 py-xxl-5 faq">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-9">
				<p class="text-center text-dark display-2 fw-bold mb-xxl-5">Find your nearest ComfyFirst team</p>
				<input list='suburb' type="text" class="form-control mb-xxl-5 rounded-0 py-xxl-3 mb-3" id="spost" placeholder="Enter your Suburb">
				<datalist id="suburb">
					<?php foreach ($areas as $key => $value) {
						foreach ($value as $k => $v) {
					?>
							<option value="<?= $v ?>"><?= $v ?></option>
					<?php
						}
					} ?>
				</datalist>
				<div class="btn-toolbar d-none d-xl-flex justify-content-center mb-5 ">
					<?php
					$n = 0;
					foreach ($areas as $key => $value) {
						$n++;
						$k = strtolower(str_replace(" ", "-", $key));
						$k = str_replace("&", "", $k);
					?>
						<a href="javascript:;" key="<?= $k ?>" class="border-0 col-xl-auto rounded-0 quote-book-request-btn btn btn-dark <?= $n == 1 ? 'active' : '' ?> mx-2 mb-3 py-2 line-height-1--2"><span class="h6 font-weight-600"><?= $key ?></span></a>
					<?php
					}
					?>
				</div>
				<select class="form-select select-tab h5 fw-bold mb-4 d-xl-none">
					<!-- <option disabled="" selected="">Select a Region</option> -->
					<?php
					foreach ($areas as $key => $value) {
						$k = strtolower(str_replace(" ", "-", $key));
						$k = str_replace("&", "", $k);
					?>
						<option key="<?= $k ?>"><?= $key ?></option>
					<?php
					}
					?>
				</select>

				<?php
				$l = 0;
				foreach ($areas as $key => $value) {
					$l++;
					$k = strtolower(str_replace(" ", "-", $key));
					$k = str_replace("&", "", $k);
				?>
					<div class="bcontent <?= $l == 1 ? '' : 'd-none' ?>" key="<?= $k ?>">
						<div class="row align-items-center mb-5">
							<div class="col-auto">
								<p class="h5 text-dark mb-0"><?= count($value); ?> results found</p>
							</div>
							<div class="col">
								<hr>
							</div>
						</div>
						<div class="row">
							<?php
							$n = 0;
							foreach ($value as $k => $v) {
								$slug = str_replace(' ', '-', strtolower($v));
								$n++;
							?>
								<div class="col-xxl-3 col-lg-4 col-md-6 mb-3">
									<a href="<?= $domain ?>/plumber-<?= $slug ?>/" class="btn btn-outline-light w-100 text-dark fw-normal py-xxl-3"><?= $v ?></a>
								</div>
							<?php
							}
							?>
						</div>
					</div>
				<?php
				}
				?>

				<div class="bcontent d-none" key="search">
					<div class="row align-items-center mb-xxl-5 mb-3">
						<div class="col-auto">
							<p class="h5 text-dark mb-0"><span id="res"></span> results found</p>
						</div>
						<div class="col">
							<hr>
						</div>
					</div>
					<div class="row all-locations">

						<?php
						$n = 0;
						foreach ($areas as $key => $value) {
							foreach ($value as $k => $v) {
								$slug = str_replace(' ', '-', strtolower($v));
								$n++;
						?>
								<div class="col-xxl-3 col-lg-4 col-md-6 mb-3 col-btn">
									<a href="<?= $domain ?>/plumber-<?= $slug ?>/" class="btn btn-outline-light w-100 text-dark fw-normal py-xxl-3"><?= $v ?></a>
								</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
include __DIR__ . '/src/qcb.php';
include __DIR__ . '/src/footer.php';
?>