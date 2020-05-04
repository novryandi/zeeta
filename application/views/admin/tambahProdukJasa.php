
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tambah Jasa
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="post" action="<?= base_url('JasaHome');?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Jasa</label>
                  <input type="text" name="nama_jasa" id="nama_jasa" class="form-control" placeholder="Nama" required>
                </div>

                <div class="box-body pad">
                  <form>
                    <label>Deskripsi</label>
                    <textarea class="textarea" placeholder="Deskripsi Jasa" name="deskripsi_jasa" id="deskripsi_jasa"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </form>
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga_jasa" id="harga_jasa" class="form-control" placeholder="Harga" required>
                </div>

        				<div class="form-group">
        					<label>Foto Jasa</label>
        					<input type="file" name="foto_jasa" id="foto_jasa" class="dropify" data-height="300">
        				</div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
