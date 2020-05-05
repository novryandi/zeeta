<!-- ============body======= -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home | Promo
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
              <h3 class="box-title">Promo</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul Promo</th>
                  <th>Foto</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($promo as $pr) : ?>
                <tr>
                  <td><?= $pr['id_promo'];?></td>
                  <td><?= $pr['nama_promo'];?></td>
                  <td><img src="<?= base_url();?>upload/promo/<?= $pr['foto_promo'];?>" width="auto" height="150px"></td>
                  <td>
                    <a href="<?= base_url();?>PromoHome/index/<?= $pr['id_promo'];?>" class="btn btn-primary" role="button" title="Tambah Data"> Edit</a>
                  </td>
                  <tr>
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
