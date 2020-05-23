<section class="section-testimonial-header mt-5 border-bottom">
	<div class="container ">
		<div class="row section-testimonial">
			<div id="carousel-indicators-testimonials" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-indicators-testimonials" data-slide-to="0" class="active"></li>
					<?php $total_car = count($testimoni) ?>
					<?php for ($i = 1; $i < $total_car; $i++) { ?>
					  <li data-target="#carousel-indicators-testimonials" data-slide-to="<?= $i ?>"></li>
					<?php if (++$i == 4) break; } ?>
				</ol>
				<div class="carousel-inner">
				<div class="carousel-item active">
						<div class="row featurette section-text mb-5">
							<div class="col-lg-7 mt-5">
							<h3>Testimonial</h3>
							<h3 class="mt-5 mb-5 star-rating">Rating &nbsp; &nbsp;
								<?php if ($testimoni[0]->rating == 1){ ?>
									<span class="fa fa-star" data-rating="1"></span>
									<span class="fa fa-star-o" data-rating="1"></span>
									<span class="fa fa-star-o" data-rating="1"></span>
									<span class="fa fa-star-o" data-rating="1"></span>
									<span class="fa fa-star-o" data-rating="1"> Worst ! </span>
								<?php } elseif ($testimoni[0]->rating == 2) { ?>
									<span class="fa fa-star" data-rating="2"></span>
									<span class="fa fa-star" data-rating="2"></span>
									<span class="fa fa-star-o" data-rating="2"></span>
									<span class="fa fa-star-o" data-rating="2"></span>
									<span class="fa fa-star-o" data-rating="2"> Bad ! </span>
								<?php } elseif ($testimoni[0]->rating == 3) { ?>
									<span class="fa fa-star" data-rating="3"></span>
									<span class="fa fa-star" data-rating="3"></span>
									<span class="fa fa-star" data-rating="3"></span>
									<span class="fa fa-star-o" data-rating="3"></span>
									<span class="fa fa-star-o" data-rating="3"> Cool ! </span>
								<?php } elseif ($testimoni[0]->rating == 4) { ?>
									<span class="fa fa-star" data-rating="4"></span>
									<span class="fa fa-star" data-rating="4"></span>
									<span class="fa fa-star" data-rating="4"></span>
									<span class="fa fa-star" data-rating="4"></span>
									<span class="fa fa-star-o" data-rating="4"> Fabulous ! </span>
								<?php } elseif ($testimoni[0]->rating == 5) {?>
									<span class="fa fa-star" data-rating="5"></span>
									<span class="fa fa-star" data-rating="5"></span>
									<span class="fa fa-star" data-rating="5"></span>
									<span class="fa fa-star" data-rating="5"></span>
									<span class="fa fa-star" data-rating="5"> Perfect ! </span>
								<?php }?>
							</h3>
								<h5 class="mt-5 mb-5 mr-5 mr-sm-3 text-justify">
								"<?= $testimoni[0]->testimoni  ?>"
								</h5>
								<h4 class="mt-5 mb-3">
									<?php if (isset($testimoni[0]->user_id)) {
										foreach ($users as $user) {
											if ($user->user_id == $testimoni[0]->user_id) {
												echo $user->first_name." ".$user->last_name;
											}
										}
									} else {
										foreach ($users_google as $user_google) {
											if ($user_google->google_id == $testimoni[0]->google_id) {
												echo $user_google->first_name." ".$user_google->last_name;
											}
										}
									} ?>
								</h4>
								<p>Paket
									<?php foreach ($paket as $dataPaket) {
										if ($dataPaket->paket_id == $testimoni[0]->paket_id) {
											echo $dataPaket->judul;
										}
									} ?></p>
							</div>
							<div class="col-lg-5">
								<img class="img-pict-testimonial rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mt-5 float-right" style="width: auto; height: 400px; border-radius: 15px;"
								src="<?php if (isset($testimoni[0]->user_id)) {
									foreach ($users as $user) {
										if ($user->user_id == $testimoni[0]->user_id) {
											echo base_url('/assets/frontend/images/users/profile/'.$user->img_profile);
										}
									}
								} else {
									foreach ($users_google as $user_google) {
										if ($user_google->google_id == $testimoni[0]->google_id) {
											echo $user_google->img_profile;
										}
									}
								} ?>" alt="gambar1">
							</div>
						</div>

					</div>

					<?php $i = 1; foreach (array_slice($testimoni, 1) as $dataTesti): ?>
					<div class="carousel-item">
							<div class="row featurette section-text mb-5">

								<div class="col-lg-7 mt-5">
								<h3>Testimonial</h3>
								<h3 class="mt-5 mb-5 star-rating">Rating &nbsp; &nbsp;
									<?php if ($dataTesti->rating == 1){ ?>
										<span class="fa fa-star" data-rating="1"></span>
										<span class="fa fa-star-o" data-rating="1"></span>
										<span class="fa fa-star-o" data-rating="1"></span>
										<span class="fa fa-star-o" data-rating="1"></span>
										<span class="fa fa-star-o" data-rating="1"> Worst ! </span>
									<?php } elseif ($dataTesti->rating == 2) { ?>
										<span class="fa fa-star" data-rating="2"></span>
										<span class="fa fa-star" data-rating="2"></span>
										<span class="fa fa-star-o" data-rating="2"></span>
										<span class="fa fa-star-o" data-rating="2"></span>
										<span class="fa fa-star-o" data-rating="2"> Bad ! </span>
									<?php } elseif ($dataTesti->rating == 3) { ?>
										<span class="fa fa-star" data-rating="3"></span>
										<span class="fa fa-star" data-rating="3"></span>
										<span class="fa fa-star" data-rating="3"></span>
										<span class="fa fa-star-o" data-rating="3"></span>
										<span class="fa fa-star-o" data-rating="3"> Cool ! </span>
									<?php } elseif ($dataTesti->rating == 4) { ?>
										<span class="fa fa-star" data-rating="4"></span>
										<span class="fa fa-star" data-rating="4"></span>
										<span class="fa fa-star" data-rating="4"></span>
										<span class="fa fa-star" data-rating="4"></span>
										<span class="fa fa-star-o" data-rating="4"> Fabulous ! </span>
									<?php } elseif ($dataTesti->rating == 5) {?>
										<span class="fa fa-star" data-rating="5"></span>
										<span class="fa fa-star" data-rating="5"></span>
										<span class="fa fa-star" data-rating="5"></span>
										<span class="fa fa-star" data-rating="5"></span>
										<span class="fa fa-star" data-rating="5"> Perfect ! </span>
									<?php }?>
								</h3>
									<h5 class="mt-5 mb-5 mr-5 mr-sm-3 text-justify">
									"<?= $dataTesti->testimoni  ?>"
									</h5>
									<h4 class="mt-5 mb-3">
										<?php if (isset($dataTesti->user_id)) {
											foreach ($users as $user) {
												if ($user->user_id == $dataTesti->user_id) {
													echo $user->first_name." ".$user->last_name;
												}
											}
										} else {
											foreach ($users_google as $user_google) {
												if ($user_google->google_id == $dataTesti->google_id) {
													echo $user_google->first_name." ".$user_google->last_name;
												}
											}
										} ?>
									</h4>
									<p>Paket
										<?php foreach ($paket as $dataPaket) {
											if ($dataPaket->paket_id == $dataTesti->paket_id) {
												echo $dataPaket->judul;
											}
										} ?></p>
								</div>
								<div class="col-lg-5">
									<img class="img-pict-testimonial rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mt-5" style="width: auto; height: 400px; border-radius: 15px;"
									src="<?php if (isset($dataTesti->user_id)) {
										foreach ($users as $user) {
											if ($user->user_id == $dataTesti->user_id) {
												echo base_url('/assets/frontend/images/users/profile/'.$user->img_profile);
											}
										}
									} else {
										foreach ($users_google as $user_google) {
											if ($user_google->google_id == $dataTesti->google_id) {
												echo $user_google->img_profile;
											}
										}
									} ?>" alt="gambar1">
								</div>

							</div>
						</div>
						<?php	if (++$i == 4) break;
						 endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
