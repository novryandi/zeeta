<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Home | Beranda
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
            <h3>Profil Klinik</h3>
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url();?>AdminHome/index/<?= $home['id_home'];?>">
              <div class="box-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" name="nama_home" id="nama_home" class="form-control" value="<?= $home['nama_home'];?>" required>
                </div>
                <div class="box-body pad">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi_home" id="deskripsi_home" class="form-control" value="<?= $home['deskripsi_home'];?>" required>
                  </div>
                </div>
        				<div class="form-group">
        					<label>Foto Profil Klinik</label>
        					<input type="file" name="foto_home" class="dropify" data-height="300">
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
