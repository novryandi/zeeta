<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Jasa kami
				</h3>
			</div>
		<div class="container">

			<div class="row">
				<?php foreach($jasa as $js) :?>
					<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">		
						<div class="block2">
								<div class="fit-image block1 hov-img-zoom-prm pos-relative m-b-30">
									<a href="<?= base_url();?>Homepage/jasadesk/<?= $js['id_jasa'];?>">
										<img width="auto" height="350px" src="<?= base_url(); ?>upload/jasa/<?= $js['foto_jasa'];?>" alt="IMG-PRODUCT">
									</a>
									
								</div>

								<div class="block2-txt p-t-20">
									<a href="<?= base_url();?>Homepage/jasadesk/<?= $js['id_jasa'];?>" class="block2-name dis-block s-text3 p-b-5">
										<?= $js['nama_jasa'];?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp.<?= $js['harga_jasa'];?>
									</span>
								</div>
						</div>
					</div>
					<br>
				<?php endforeach;?>
			</div>
		</div>
					
	</section>
