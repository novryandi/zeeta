<!-- ============body======= -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home | Jasa
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jasa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div><a href="<?= base_url('JasaHome');?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Jasa</a></div>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Jasa</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($jasa as $js) : ?>
                <tr>
                  <td><?= $js['nama_jasa'];?></td>
                  <td><?= $js['deskripsi_jasa'];?></td>
                  <td><?= $js['harga_jasa'];?></td>
                  <td><?= $js['foto_jasa'];?></td>
                  <td>
                    <a href="<?= base_url();?>JasaHome/edit_jasa/<?= $js['id_jasa'];?>" class="btn btn-primary" role="button" title="Tambah Data"> Edit</a>
                  	<a href="<?= base_url();?>JasaHome/hapus/<?= $js['id_jasa'];?>" class="btn btn-danger" onclick="return confirm('yakin?');">Hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
              <!--/.box -->
            </div>
      </div>

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- =============body end============= -->
