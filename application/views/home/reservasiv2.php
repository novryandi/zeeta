
<h1>Reservasi</h1>

<div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama</label>
                  <input name="nama" type="text" class="form-control" placeholder="Masukan nama anda">
                </div>
                <!-- No handphone / wa -->
                <div class="form-group">
                  <label>No Handphone / WA</label>
                  <input name="phone" type="text" class="form-control" placeholder="Masukan no HP anda">
                </div>
                <!-- Email -->
                <div class="form-group">
                  <label>Email</label>
                  <input name="email" type="text" class="form-control" placeholder="Masukan Email anda">
                </div>

                <!-- Date -->
                <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>

              <!-- time Picker -->
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label>Time picker:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

                <!-- select -->
                <div class="form-group">
                  <label>Jenis reservasi</label>
                  <select name="jenis" class="form-control" style="height: 35px">
                    <option value=""></option>
                    <option value="Produk">Barang</option>
                    <option value="Jasa">Jasa</option>
                  </select>
                </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url();?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- web script -->
<script>
$(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>