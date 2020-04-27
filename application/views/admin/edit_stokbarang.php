
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Barang
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
            <form role="form" method="post" action="<?= base_url()?>Barang/Edit/<?= $produk['id_produk'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="<?= $produk['nama_produk'];?>">
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga_produk" id="harga_produk" class="form-control" value="<?= $produk['harga_produk'];?>">
                </div>
                <div class="form-group">
                  <label>Jumlah stok</label>
                  <input type="text" name="jumlah_produk" id="jumlah_produk" class="form-control" value="<?= $produk['jumlah_produk'];?>">
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Ubah Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
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
