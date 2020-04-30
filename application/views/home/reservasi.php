<h1>Reservasi</h1>

<form method="post" action="<?= base_url('Homepage/reservasi')?>">
<div class="container">
   <div class="panel panel-primary">
      <div class="panel-body">
        <!-- Nama -->
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama anda" required
                  oninvalid="this.setCustomValidity('Tolong isi dengan benar')" oninput="setCustomValidity('')">
               </div>
            </div>
         </div>
         <!-- HP -->
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Nomor Telp/HP</label>
                  <input type="number" class="form-control" name="phone" id="phone" placeholder="Masukan nomor HP anda" required oninvalid="this.setCustomValidity('Tolong isi dengan benar')" oninput="setCustomValidity('')">
               </div>
            </div>
         </div>
         <!-- Email -->
         <div class="row">
            <div class="col-md-12">
               <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukan email anda (example@email.com)" required oninvalid="this.setCustomValidity('Tolong isi dengan benar')" oninput="setCustomValidity('')">
               </div>
            </div>
         </div>

         <!-- Tanggal -->
         <div class="row">
            <div class='col-md-12'>
               <div class="form-group">
                  <label class="control-label">Tanggal Reservasi</label>
                  <div class="input-group date" data-provide="datepicker" id="datetimepicker1" required>
                     <input name="tanggal" type='text' class="form-control" >
                     <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                  </div>
               </div>
            </div>
         </div>

        <div class="row">
          <div class="col-md-12">
                <div class="form-group">
                  <label>Waktu Reservasi</label>
                  <div class="input-group">
                    <input name="jam" id="jam" type="text" class="form-control timepicker" required>

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                </div>
              </div>
        </div>

         <div class="form-group" required>
                <label for="title">Jenis Reservasi yg ingin anda lakukan:</label>
                <select name="jenis" class="form-control" style="height: 35px" >
                    <option value=""> </option>
                    <!-- place holder -->
                    <option value="Produk">Produk</option>
                    <option value="Jasa">Jasa</option>
                </select>
            </div>

         <input type="submit" class="btn btn-primary" value="Submit">
      </div>
   </div>
</div>

</form>


<!--===================================================================== -->
