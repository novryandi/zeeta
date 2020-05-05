

	<!--deskripsi salon-->
	<div class="container" style="margin: 75px;">
		<h2><?= $home['nama_home'];?></h2>
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="<?= base_url(); ?>upload/home/<?= $home['foto_home'];?> "alt="IMG-BENNER">
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<p><?= $home['deskripsi_home'];?></p>

						<a href="<?= base_url('homepage/reservasi');?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> Reservasi Sekarang</a>


					</div>


				</div>

			</div>
		</div>

	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->

					<?php foreach($promo as $pr) :?>
					<a href="#">
					<div class="fit-image block1 hov-img-zoom-prm pos-relative m-b-30">
						<img width="auto" height="300px" src="<?= base_url(); ?>upload/promo/<?= $pr['foto_promo'];?>" alt="IMG-BENNER">

						<div>
							<!-- Button -->
							<button class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								<?= $pr['nama_promo'];?>
							</button>
							</a>
						</div>
					</div>
				<?php endforeach;?>
	</section>
