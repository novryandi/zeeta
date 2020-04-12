<!-- ============body======= -->
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
              <h3 class="box-title">Stok Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div><a href="<?= base_url('Barang/Tambah');?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah Barang</a></div>
              <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Kode barang</th>
                  <th>Nama barang</th>
                  <th>Jumlah Stok</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>IF1109</td>
                  <td>Sesuatu</td>
                  <td>isi berdasarkan database</td>
                  <td>
                    <a href="<?= base_url('Barang/Edit');?>" class="btn btn-primary" role="button" title="Tambah Data"> Edit</a>
                  	<button type="button" class="btn btn-danger">Hapus</button>
                  </td>
                </tr>
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