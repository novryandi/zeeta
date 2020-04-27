
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tambah Barang
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
            <form role="form" method="post" action="<?= base_url('Barang/tambah')?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama_produk" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga_produk" class="form-control" placeholder="Harga">
                </div>
                <div class="form-group">
                  <label>Jumlah stok</label>
                  <input type="text" name="jumlah_produk" class="form-control" placeholder="Jumlah Stok">
                </div>

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
