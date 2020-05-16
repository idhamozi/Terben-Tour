<section class="section-paket-header mt-5  border-bottom ">
	<div class="container">
		<div class="row section-paket">
			<div id="carousel-indicators-paket" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-indicators-paket" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-indicators-paket" data-slide-to="1"></li>
					<li data-target="#carousel-indicators-paket" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner pb-5">
					<div class="carousel-item active">
						<div class="row featurette section-text">
							<div class="col-lg-7 mt-5">
								<h3 class="mt-1">Exclusive Trips</h3>
								<h2 class="mt-5"><?= $eksklusif[0]->judul  ?></h2>
								<p class="mt-5 mb-5 mr-5 mr-sm-3 text-justify">
									<?= $eksklusif[0]->deskripsi  ?>
								</p>
								<h5 class="mt-3 pl-3 border-left">Selama <?= $eksklusif[0]->durasi ?> Hari</h5>
								<div class="price-and-cta float-left">
									<h4 class="mt-3">Rp. <?= number_format($eksklusif[0]->harga, 2, ',', '.') ?></h4>
								</div>
								<div class="from-inline my-2 my-lg-0 float-right">
									<button class="btn-check btn-right my-2 my-sm-0 px-4 mx-3" onclick="location.href='<?= base_url('Paket/Kategori/'.$eksklusif[0]->kategori_id); ?>'">
										Check <i class="fas fa-angle-right pl-2"></i>
									</button>
								</div>
							</div>
							<div class="col-lg-5 mt-5">
								<img class="img-pict-trip rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mt-5" style="width:1350px; height: 350px;" src="<?= base_url('/assets/frontend/images/admin/paket/'.$eksklusif[0]->img_paket)  ?>" alt="gambar1">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row featurette section-text">
							<div class="col-lg-7 mt-5">
								<h3 class="mt-1">Business Trips</h3>
								<h2 class="mt-5"><?= $bisnis[0]->judul  ?></h2>
								<p class="mt-5 mb-5 mr-5 mr-sm-3 text-justify">
									<?= $bisnis[0]->deskripsi  ?>
								</p>
								<h5 class="mt-3 pl-3 border-left">Selama <?= $bisnis[0]->durasi  ?> Hari</h5>
								<div class="price-and-cta float-left">
									<h4 class="mt-3">Rp. <?= number_format($bisnis[0]->harga, 2, ',', '.') ?></h4>
								</div>
								<div class="from-inline my-2 my-lg-0 float-right">
									<button class="btn-check btn-right my-2 my-sm-0 px-4 mx-3" onclick="location.href='<?= base_url('Paket/Kategori/'.$bisnis[0]->kategori_id); ?>'">
										Check <i class="fas fa-angle-right pl-2"></i>
									</button>
								</div>
							</div>
							<div class="col-lg-5 mt-5">
								<img class="img-pict-trip rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mt-5" style="width:1350px; height: 350px;" src="<?= base_url('/assets/frontend/images/admin/paket/'.$bisnis[0]->img_paket)  ?>" alt="gambar1">
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row featurette section-text">
							<div class="col-lg-7 mt-5">
								<h3 class="mt-1">Economic Trips</h3>
								<h2 class="mt-5"><?= $ekonomi[0]->judul  ?></h2>
								<p class="mt-5 mb-5 mr-5 mr-sm-3 text-justify">
									<?= $ekonomi[0]->deskripsi  ?>
								</p>
								<h5 class="mt-3 pl-3 border-left">Selama <?= $ekonomi[0]->durasi  ?> Hari</h5>
								<div class="price-and-cta float-left">
									<h4 class="mt-3">Rp. <?= number_format($ekonomi[0]->harga, 2, ',', '.') ?></h4>
								</div>
								<div class="from-inline my-2 my-lg-0 float-right">
									<button class="btn-check btn-right my-2 my-sm-0 px-4 mx-3" onclick="location.href='<?= base_url('Paket/Kategori/'.$ekonomi[0]->kategori_id); ?>'">
										Check <i class="fas fa-angle-right pl-2"></i>
									</button>
								</div>
							</div>
							<div class="col-lg-5 mt-5">
								<img class="img-pict-trip rounded bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto mt-5" style="width:1350px; height: 350px;" src="<?= base_url('/assets/frontend/images/admin/paket/'.$ekonomi[0]->img_paket)  ?>" alt="gambar1">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
