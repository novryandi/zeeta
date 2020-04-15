
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Produk
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
            <form role="form" method="post" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="kode" class="form-control" placeholder="nama" required>
                </div>
                
                <div class="box-body pad">
                  <form>
                    <label>Deskripsi</label>
                    <textarea class="textarea" placeholder="Deskripsi Produk"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </form>
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="jumlah" class="form-control" placeholder="Jumlah Stok" required>
                </div>

        				<div class="form-group">
        					<label>Foto barang</label>
        					<input type="file" name="filefoto" class="dropify" data-height="300">
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