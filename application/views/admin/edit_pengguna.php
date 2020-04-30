
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Pengguna
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
            <form enctype="multipart/form-data" method="post" action="<?= base_url(); ?>Profil/edit/<?= $admin['id_admin'];?>">
              <div class="box-body">
                <?php if(validation_errors()) :?>
                  <div class="alert alert-danger">
                    <?= validation_errors()?>
                  </div>
                <?php endif;?>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama_admin" id="nama_admin" class="form-control" value="<?= $admin['nama_admin'];?>" required>
                </div>

                <div class="form-group">
                  <label>New Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                </div>

                <div class="form-group">
                  <label>Re-type Password</label>
                  <input type="password" name="password1" id="password1" class="form-control" placeholder="password" required>
                </div>

                <div class="form-group">
                  <label>Foto Profil</label>
                  <input type="file" name="foto_admin" id="foto_admin" class="dropify" data-height="300">
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
