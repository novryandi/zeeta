<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Produk kami
				</h3>
			</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<?php foreach($produk as $pr) : ?>
					<div class="block2">
							<div class="block2-img hov-img-zoom wrap-pic-w of-hidden pos-relative">
								<img src="<?= base_url(); ?>upload/produk/<?= $pr['foto'];?>" alt="IMG-PRODUCT">

								<div class="block2-overlay trans-0-4">
									<a href="<?= base_url();?>produk/index/<?=$pr['id_produk'];?>">
										<img src="<?= base_url(); ?>upload/produk/<?= $pr['foto'];?>" alt="IMG-PRODUCT">
									</a>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="<?= base_url();?>produk/index/<?=$pr['id_produk'];?>" class="block2-name dis-block s-text3 p-b-5">
									<?= $pr['nama_produk'];?>
								</a>

								<span class="block2-price m-text6 p-r-5">
									Rp.<?= $pr['harga_produk'];?>
								</span>
							</div>
						</div>
						<br>
					<?php endforeach;?>
	</section>
