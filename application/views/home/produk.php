<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Produk kami
				</h3>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach($produk as $pr) : ?>
					<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
						<!-- block1 -->
						
							<div class="block1">
								<div class="fit-image block1 hov-img-zoom-prm pos-relative m-b-30">
									<a href="<?= base_url();?>Homepage/produkdesk/<?=$pr['id_produk'];?>">
										<img width="auto" height="300px" src="<?= base_url(); ?>upload/produk/<?= $pr['foto'];?>" alt="IMG-PRODUCT">
									</a>
									
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?= base_url();?>Homepage/produkdesk/<?=$pr['id_produk'];?>" class="block2-name dis-block s-text3 p-b-5">
										<?= $pr['nama_produk'];?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp.<?= $pr['harga_produk'];?>
									</span>
								</div>
							</div>
					</div>

				<?php endforeach;?>
				<br>
			</div>
		</div>
					
	</section>
