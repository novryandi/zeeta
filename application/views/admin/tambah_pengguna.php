
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Tambah Pengguna
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
            <form autocomplete="off" role="form" method="post" action="#">
              <div class="box-body">
                <div class="form-group">
                  <label>Foto Profil</label>
                  <input type="file" name="filefoto" class="dropify" data-height="300">
                </div>
            
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                </div>

                <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="password" required>
                  <input type="checkbox" onclick="">Show Password 
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