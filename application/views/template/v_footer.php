
	<!-- Footer -->
		<div class="flex-w p-b-90" style="background-color: black;">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<img src="<?= base_url('assets/template/images/zeeta.png'); ?>" alt="zeta" style='margin: 20px;'>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-6" style="color: gold; ">
					About Us
				</h4>

				<ul>
					<li class="p-b-9">
						<a class="s-text7" style="color: gold;">
							Address :

							JL.Ryacudu blok F4 9-20 Korpri Raya, Sukarame Bandar Lampung </a>

					</li>

					<li class="p-b-9" style="color: gold;">
						<a class="s-text7">
							Phone : (0721) 5643744
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-6" style="color: gold;">
					Follow Us
				</h4>
				<ul>
					<li class="p-b-9">
						<a href="https://www.instagram.com/zeetabeautycare_lampung/" class="s-text7" style="color: gold;">
							Instagram : https://www.instagram.com/zeetabeautycare_lampung/ </a>

					</li>

					<li class="p-b-9">
						<a href="https://api.whatsapp.com/send?phone=6285382006006" class="s-text7" style="color: gold;">
							Whatsapp : 085382006006
						</a>
					</li>
				</ul>

				
			</div>
		</div>
	
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="<?= base_url();?>assets/template/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="<?= base_url();?>assets/template/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->

	<script src="<?= base_url();?>assets/template/js/main.js"></script>

	<!-- date time picker -->
	
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url();?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<<<<<<< HEAD
<!-- web script -->
<script>
$(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
=======


<!-- web script -->
<script>
$(function () {
    // Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
>>>>>>> 43a206446d4caa8d6fc63df18d4ae9d0380846c3

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
<<<<<<< HEAD
    })
  })
=======
    });
  });
>>>>>>> 43a206446d4caa8d6fc63df18d4ae9d0380846c3
</script>


</body>
</html>
