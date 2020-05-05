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
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Reservasi</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3><?= $ReservasiS;?></h3>

                      <p>Reservasi yang sudah selesai</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="<?= base_url('Reservasi');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3><?= $ReservasiB;?></h3>

                      <p>Reservasi yang belum selesai</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="<?= base_url('Reservasi');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
              <!--/.box -->
            </div>


            <div class="col-md-12">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Stok Barang</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                  <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                      <div class="inner">
                        <h3><?= $StokS;?></h3>

                      <p>Stok barang keseluruhan</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-ios-box"></i>
                      </div>
                      <a href="<?= base_url('Barang');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>

                  <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3><?= $StokK;?></h3>

                      <p>Stok barang yang kosong</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-ios-box"></i>
                      </div>
                      <a href="<?= base_url('Barang');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
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
