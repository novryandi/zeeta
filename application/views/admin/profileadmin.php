<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profil
        <small>klinik kecantikan Zeeta</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-6 col-md-offset-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= base_url();?>upload/admin/<?= $admin['foto_admin'];?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?= $admin['nama_admin']; ?></h3>

              <p class="text-muted text-center"><?= $admin['username']; ?></p>

              <a href="<?= base_url();?>Profil/edit/<?= $admin['id_admin']; ?>" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
              <br>
               <a href="<?= base_url('Profil');?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Admin</a>
              <a href="<?= base_url('Admin/logout');?>" class="btn btn-danger pull-right"><b>Log out</b></a>

            </div>
            <!-- /.box-body -->
          </div>

        </div>


      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
