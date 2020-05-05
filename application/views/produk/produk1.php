<!-- //kalo bisa otomatis dari backend -->
<h1><?$produk['nama_produk'];?></h1>

<div class="container" style="margin: 75px;">
	<div class="row">
		<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">
			<!-- block1 -->
			<div class="block1 hov-img-zoom pos-relative m-b-30">
				<img width="auto" height="500px" src="<?= base_url(); ?>upload/produk/<?$produk['foto'];?> "alt="IMG-BENNER">
			</div>
		</div>
		<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">
		<!-- block1 -->
			<div class="block1 hov-img-zoom pos-relative m-b-30" >
				<h2><?$produk['nama_produk'];?></h2><br>
				<p><?$produk['deskripsi_produk'];?></p>
				<br>
				<h2 class="harga">Rp<?$produk['harga_produk'];?></h2>
				<!-- button -->
				<a href="<?= base_url('homepage/reservasi');?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"> Reservasi Sekarang</a>
			</div>
		</div>


	</div>
</div>
