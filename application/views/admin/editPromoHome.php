<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Promo
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
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url();?>PromoHome/index/<?= $promo['id_promo'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Judul Promo</label>
                  <input type="text" name="nama_promo" id="nama_promo" class="form-control" value="<?= $promo['nama_promo'];?>" required>
                </div>
        				<div class="form-group">
        					<label>Foto</label>
        					<input type="file" name="foto_promo" class="dropify" data-height="300">
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
