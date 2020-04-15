
<section class="banner bgwhite p-b-40">
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<a class="logo-login">
						<img  src="<?= base_url('assets/template/images/zeeta.png'); ?>" alt="IMG-LOGO">
					</a>
				</div>

				<?= $this->session->flashdata('message');?>

				<div class="card-body">
					<form class="user" method="post" action="<?= base_url('Login')?>">

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="username" name="username" id="username">
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" name="password" id="password">
						</div>

						<div class="form-group">
							<input type="submit" value="Login" class="btn float-right login_btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
