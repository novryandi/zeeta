============body======= -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Admin Page
        <small>klinik kecantikan Zeeta</small>
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
              <h3 class="box-title">Resevasi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Nomor WA</th>
                  <th>Email</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Jenis Reservasi</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php foreach ($produk as $prd) : ?>
                  <td><?= $prd['nama']?></td>
                  <td><?= $prd['phone']?></td>
                  <td><?= $prd['email']?></td>
                  <td><?= $prd['tanggal']?></td>
                  <td><?= $prd['jam']?></td>
                  <td><?= $prd['jenis']?></td>
                  <td>
                    <span class="label label-success">Selesai</span>
                    <span class="label label-warning">Sudah di Konfirmasi</span>
                    <span class="label label-primary">Sudah Datang ke Klinik</span>
                  </td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-default">Action</button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Sudah di konfirmasi</a></li>
                    <li><a href="#">Sudah datang</a></li>
                    <li><a href="#">Selesai</a></li>
                    <li><a href="#">Hapus</a></li>
                  </ul>
                </div></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                </tfoot>
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
<!-- =============body end=============
